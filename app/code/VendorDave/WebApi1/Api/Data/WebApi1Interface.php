<?php

namespace VendorDave\WebApi1\Api\Data;

interface WebApi1Interface
{
    /**
     * @return string
     */
    public function getItem();

    /**
     * @return string|null
     */
    public function getDescription();
}
