<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Ubertheme\Ubdatamigration\Block;

class Index extends \Magento\Backend\Block\Template
{
    /**
     * Url Builder
     *
     * @var \Magento\Framework\UrlInterface
     */
    protected $_urlBuilder;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     */
    public function __construct(\Magento\Backend\Block\Template\Context $context)
    {
        $this->_urlBuilder = $context->getUrlBuilder();
        parent::__construct($context);
    }

    /**
     * Generate url by route and parameters
     *
     * @param   string $route
     * @param   array $params
     * @return  string
     */
    public function getUrl($route = '', $params = [])
    {
        return $this->_urlBuilder->getUrl($route, $params);
    }
    
    public function getToolUrl(){
        $pubFolder = \Magento\Framework\App\Filesystem\DirectoryList::PUB;
        $toolUrl = $this->_storeManager->getStore()->getBaseUrl().'/'.$pubFolder.'/ub-tool';
        $toolUrl = str_replace('index.php/', '', $toolUrl);
        return $toolUrl;
    }
}
