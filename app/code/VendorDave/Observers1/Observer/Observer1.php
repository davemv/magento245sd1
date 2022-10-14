<?php

namespace VendorDave\Observers1\Observer;

use Magento\Framework\Event\ObserverInterface;

class Observer1 implements ObserverInterface
{
    protected $logger;
    protected $session;

    public function __construct(
        \Psr\Log\LoggerInterface $logger,
        \Magento\Checkout\Model\Session $session
    ) {
        $this->logger = $logger;
        $this->session = $session;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $product = $observer->getEvent()->getProduct();
        $this->logger->info("PRODUCT RECeIVEdd: " . json_encode(get_class_methods($product)));
        $this->logger->info("getProductURL: " . ($product->getSku()));
        $quote = $this->session->getQuote();
        $qty = $quote->getItemsSummaryQty();

        if ($qty >= 2) {
            throw new \Magento\Framework\Exception\NoSuchEntityException(__("Solo puedes agregar un máximo de 2 elementos al carrito"));
        }
    }
}
