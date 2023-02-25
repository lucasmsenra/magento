<?php
namespace ForMage\Learning\Model\Observer;
use Magento\Framework\Event\ObserverInterface;
class CustomObserver implements ObserverInterface
{
    /**
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $message = $observer->getData('custom_text');
        $message->setCustomText('That is my SECOND custom text');
    }
}
