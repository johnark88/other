<?php

namespace Dahl\Homepage\Block;

use Magento\Framework\View\Element\Template;

/**
 * Main contact form block
 */
class HomepageCatalogReq extends Template
{
    /**
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        $this->_isScopePrivate = true;
    }

    /**
     * Returns action url for contact form
     *
     * @return string
     */
    public function getFormAction()
    {
        return $this->getUrl('homepage/index/post', ['_secure' => true]);
    }
}
