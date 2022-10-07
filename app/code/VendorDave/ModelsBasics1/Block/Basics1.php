<?php

namespace VendorDave\ModelsBasics1\Block;

use Magento\Framework\View\Element\Template;
// use VendorDave\ModelsBasics1\Model\ResourceModel\ModelBasics1\Collection;
use VendorDave\ModelsBasics1\Model\ResourceModel\ModelBasics1\CollectionFactory;

class Basics1 extends Template
{
    private $collectionFactory;
    private $logger;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        \Psr\Log\LoggerInterface $logger,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * return all the data from the collection
     * @return \VendorDave\ModelsBasics1\Model\ModelBasics1[]
     */
    public function getModelBasics()
    {
        // getItems is a generic method used to return all loaded items from collection
        return $this->collectionFactory->create()->getItems();
    }


    public function getAsd()
    {
        return 123;
    }
}
