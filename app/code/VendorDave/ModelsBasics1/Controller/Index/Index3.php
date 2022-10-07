<?php

namespace VendorDave\ModelsBasics1\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\Result\Raw;
use VendorDave\ModelsBasics1\Model\ResourceModel\ModelBasics1\CollectionFactory;

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
        parent::__construct($context);
        $this->pageFactory = $page;
        $this->jsonFactory = $jsonFactory;
        $this->raw = $raw;
        $this->basics1 = $basics1;
        $this->collection = $collection;
    }
    public function execute()
    {
        $cont = $this->context;
        // echo get_class($cont);
        echo '<pre>';
        // print_r(get_class_methods($cont));
        // print_r(get_object_vars($cont));
        echo "PARAMS: " . gettype($cont->getRequest()->getParams()) . '<br>';
        print_r(($cont->getRequest()->getParams()));
        echo gettype($cont->getRequest());
        print_r(get_class_methods($cont->getRequest()));

        dd($cont);
        exit;


        //        return $this->pageFactory->create();
        //        return $this->jsonFactory->create()->setData(['name' => 'Abraão', 'city' => 'Rio de Janeiro', 'customer' => [
        //            'name' => 'customer name',
        //            'email' => 'customer email'
        //        ]]);
        return $this->raw->setContents('That is my raw content');
    }
}
