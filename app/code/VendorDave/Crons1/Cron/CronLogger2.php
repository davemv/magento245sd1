<?php

namespace VendorDave\Crons1\Cron;

use Psr\Log\LoggerInterface;

class CronLogger2
{
    private $logger;

    public function __construct(
        LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    public function execute()
    {
        $this->logger->info("AGREGANDO DESDE CUSTOM GROUP A LAS. " . time());
    }
}
