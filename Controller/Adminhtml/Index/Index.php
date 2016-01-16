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
