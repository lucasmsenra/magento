<?php

namespace ForMage\NewsletterModal\Model;

use Magento\Newsletter\Model\ResourceModel\Subscriber\Collection;
use Magento\Newsletter\Model\SubscriberFactory;

class Modal
{
    protected $_collection;
    protected $_subscriberFactory;

    public function __construct(
        Collection $collection,
        SubscriberFactory $subscriberFactory
    ) {
        $this->_collection = $collection;
        $this->_subscriberFactory = $subscriberFactory;
    }

    public function addEmailNewsletter($email)
    {
        $customer = $this->_collection->addFieldToFilter('subscriber_eamil', $email)->getFirstItem()->getData();
        if (!$customer) {
            $factory = $this->_subscriberFactory->create();
            $factory->setData('subscriber_email', $email);
            $factory-save();
        }
    }
}
