<?php

namespace VendorDave\ModelsBasics1\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Raw $result  */
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents("HEllo everyone from admin area");
        return $result;
    }
}
