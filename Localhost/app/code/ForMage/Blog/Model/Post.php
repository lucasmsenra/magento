<?php

namespace ForMage\Blog\Model;

use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\ForMage\Blog\Model\ResourceModel\Post::class);
    }
}
