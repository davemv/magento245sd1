<?php

namespace VendorDave\ModelsBasics1\Controller\Index;

use Magento\Framework\Controller\ResultFactory;
use VendorDave\ModelsBasics1\Block\Basics1;

class Index2 extends \Magento\Framework\App\Action\Action
{
    private $basics1;


    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Raw $result  */
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents("HEllo everyone from front123");
        return $result;
    }
}
