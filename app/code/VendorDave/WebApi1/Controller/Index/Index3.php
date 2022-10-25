<?php

namespace VendorDave\WebApi1\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\Result\Raw;
use VendorDave\WebApi1\Model\ResourceModel\WebApi1\CollectionFactory;

use VendorDave\ModelsBasics1\Block\Basics1;

class Index3 extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;
    protected $jsonFactory;
    protected $raw;
    protected $basics1;
    protected $collection;
    protected $context;

    public function __construct(
        Context $context,
        PageFactory $page,
        JsonFactory $jsonFactory,
        Raw $raw,
        Basics1 $basics1,
        CollectionFactory $collection
    ) {
        $this->context = $context;        
        $this->pageFactory = $page;
        $this->jsonFactory = $jsonFactory;
        $this->raw = $raw;
        $this->basics1 = $basics1;
        $this->collection = $collection;
        parent::__construct($context);
    }
    public function execute()
    {
        // $c = $this->collection->create()->getItems();
        
        // foreach ($c as $cc) {
            
        //     $data = $cc->getData();
        //     echo $cc->getItem();
        //     dd(get_class_methods($cc));
        // }
        // dd(($c));
        // exit;


        $c = $this->collection->create();
        dd(get_class_methods($c));


        //        return $this->pageFactory->create();
        //        return $this->jsonFactory->create()->setData(['name' => 'Abraão', 'city' => 'Rio de Janeiro', 'customer' => [
        //            'name' => 'customer name',
        //            'email' => 'customer email'
        //        ]]);
        return $this->raw->setContents('That is my raw content');
    }
}
