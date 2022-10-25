<?php

namespace VendorDave\WebApi1\Api;

interface WebApi1RepositoryInterface
{
    /**
     * @return \VendorDave\WebApi1\Api\Data\WebApi1Interface[]
     */
    public function getList();
}
