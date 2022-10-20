<?php

namespace VendorDave\Crons1\Cron;

use Psr\Log\LoggerInterface;

class CronLogger
{
    private $logger;

    public function __construct(
        LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    public function execute()
    {
        $this->logger->info("AGREGANDO ELEMENTO DESDE EL CRON A LAS. " . time());
    }
}
