<?php

namespace Magenteiro\Comments\Model;

use Magenteiro\Comments\Model\ResourceModel\Comments as CommentResourceModel;
use Magento\Framework\Model\AbstractModel;

class Comments extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(CommentResourceModel::class);
    }
}
