<?php

namespace VendorDave\DiExample1\Model;

use Magento\Framework\Model\AbstractModel;
use VendorDave\DiExample1\Api\TestInterface;

class Implementator extends AbstractModel implements TestInterface
{

    public function saludar()
    {
        return "HOLA";
    }
}
