<?php

namespace ForMage\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ForMage\Blog\Model\Post;
use ForMage\Blog\Model\ResourceModel\Post as PostResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Post::class, PostResourceModel::class);
    }
}
