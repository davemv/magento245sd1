<?php

namespace VendorDave\DiExample1\Controller\Action;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\Raw;
use VendorDave\DiExample1\Api\TestInterface;

class TestDi extends \Magento\Framework\App\Action\Action
{
    protected $raw;
    protected $context;
    protected $interface;

    public function __construct(
        Context $context,
        Raw $raw,
        TestInterface $interface
    ) {
        $this->context = $context;
        parent::__construct($context);
        $this->raw = $raw;
        $this->interface = $interface;
    }
    public function execute()
    {
        $val =  $this->interface->saludar();
        return $this->raw->setContents($val);
    }
}
