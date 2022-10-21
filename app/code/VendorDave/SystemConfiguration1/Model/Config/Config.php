<?php

namespace VendorDave\SystemConfiguration1\Model\Config;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    const XML_PATH_ENABLED = 'vendordavesection/general/enabled';
    const XML_PATH_EXPRESSION = 'vendordavesection/general/expression';

    private $config;

    public function __construct(ScopeConfigInterface $config)
    {
        $this->config = $config;
    }

    public function isEnabled()
    {
        return $this->config->getValue(self::XML_PATH_ENABLED);
    }

    public function getExpression()
    {
        return $this->config->getValue(self::XML_PATH_EXPRESSION);
    }
}
