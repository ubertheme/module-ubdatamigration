<?php
namespace Ubertheme\Ubdatamigration\Controller\Adminhtml;

abstract class Index extends \Magento\Backend\App\Action
{
    /**
     * Check for is allowed
     *
     * @return boolean
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Ubertheme_Ubdatamigration::index');
    }
}
