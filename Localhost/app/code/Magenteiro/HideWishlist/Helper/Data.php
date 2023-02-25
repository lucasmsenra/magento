<?php

namespace Magenteiro\HideWishlist\Helper;

class Data extends \Magento\Wishlist\Helper\Data
{
    public function isAllow()
    {
        return $this->_isCustomerLogIn() && parent::isAllow();
    }
}
