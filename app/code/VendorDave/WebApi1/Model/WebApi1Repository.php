<?php

namespace VendorDave\WebApi1\Model;

use VendorDave\WebApi1\Api\WebApi1RepositoryInterface;
use VendorDave\WebApi1\Model\ResourceModel\WebApi1\CollectionFactory;

class WebApi1Repository implements WebApi1RepositoryInterface
{
    protected $collection;

    public function __construct(
        CollectionFactory $collection
    ) {
        $this->collection = $collection;
    }
    public function getList()
    {
        return $this->collection->create()->getItems();
    }
}
