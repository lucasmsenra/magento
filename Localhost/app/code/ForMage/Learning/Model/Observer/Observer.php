<?php

namespace ForMage\Learning\Model\Observer;

use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class Observer implements ObserverInterface
{
    private $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    /**
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $this->logger->info("O evento customer_login foi disparado");
    }
}
