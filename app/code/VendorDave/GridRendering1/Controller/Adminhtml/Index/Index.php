<?php

namespace VendorDave\GridRendering1\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        // $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        // $result->setContents("TEST");
        // return $result;
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
