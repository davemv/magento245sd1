<?php

namespace VendorDave\SystemConfiguration1\Controller\Action;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use VendorDave\SystemConfiguration1\Model\Config\Config;

class TestConfigs extends \Magento\Framework\App\Action\Action
{
    protected $jsonFactory;
    protected $config;
    protected $context;

    public function __construct(
        Context $context,
        JsonFactory $jsonFactory,
        Config $config
    ) {
        $this->context = $context;
        parent::__construct($context);
        $this->jsonFactory = $jsonFactory;
        $this->config = $config;
    }
    public function execute()
    {
        $cont = $this->context;
        return $this->jsonFactory->create()->setData([
            'enabledValue' => $this->config->isEnabled(),
            'expressionValue' => $this->config->getExpression()
        ]);
    }
}
