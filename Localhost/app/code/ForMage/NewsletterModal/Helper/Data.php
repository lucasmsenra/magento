<?php

namespace ForMage\NewsletterModal\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    const MODULE_PATH = 'formage_newslettermodal/general/';

    /**
     * @var ScopeConfigInterface
     */
    protected $_scopeConfig;

    /**
     * Data constructor.
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;
    }

    /**
     * @return mixed
     */
    public function getIsModuleEnable()
    {
        return $this->_scopeConfig->getValue(self::MODULE_PATH . 'enable', ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function getModalTitle()
    {
        return $this->_scopeConfig->getValue(self::MODULE_PATH . 'title', ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function getModalDescription()
    {
        return $this->_scopeConfig->getValue(self::MODULE_PATH . 'description', ScopeInterface::SCOPE_STORE);
    }
}
