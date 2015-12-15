<?php

namespace Ubertheme\Ubdatamigration\Controller\Adminhtml\Index;

use Magento\Framework\App\Filesystem\DirectoryList;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;
    

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    
    /**
     * Check for is allowed
     *
     * @return boolean
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Ubertheme_Ubdatamigration::index');
    }

    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute(){
        $reader = $this->_objectManager->get('Magento\Framework\Module\Dir\Reader');
        $sourceDir = $reader->getModuleDir('', 'Ubertheme_Ubdatamigration').'/lib/';
        if (file_exists($sourceDir.'update.flag')){
            //we will update/save souce of this lib at pub folder
            $pubDir = $this->_objectManager->get('Magento\Framework\Filesystem')->getDirectoryRead(DirectoryList::PUB);
            $toolDir = $pubDir->getAbsolutePath('ub-tool/');
            $helper = $this->_objectManager->get('Ubertheme\Ubdatamigration\Helper\File');
            //delete old source of tool
            $helper->rrmdir($toolDir);
            //copy new source of this tool
            $helper->xcopy($sourceDir, $toolDir, 0775);
            //remove flag update code
            unlink($sourceDir.'update.flag');
        }
        
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->getResultPageFactory()->create();
        $resultPage->setActiveMenu('Ubertheme_Ubdatamigration::migrate');
        $resultPage->addBreadcrumb(__('Migrate'), __('Migrate'));
        $resultPage->getConfig()->getTitle()->prepend(__('UB Data Migration'));

        return $resultPage;
    }

    /**
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function getResultPageFactory(){
        return $this->resultPageFactory;
    }
}
