<?php

namespace Magenteiro\CustomerNormalizer\Plugin\Api;

use Magento\Customer\Api\CustomerRepositoryInterface;
use Magento\Customer\Api\Data\CustomerInterface;

class CustomerRepositoryInterfacePlugin
{
    public function beforeSave(
        CustomerRepositoryInterface $subject,
        CustomerInterface $customer,
        $passwordHash = null
    )
    {
        $customer->setFirstname(mb_convert_case($customer->getFirstname(), MB_CASE_TITLE));
        $customer->setLastname(mb_convert_case($customer->getLastname(), MB_CASE_TITLE));
        $customer->setEmail(mb_convert_case($customer->getEmail(), MB_CASE_TITLE));
        return [$customer, $passwordHash];
    }
}
