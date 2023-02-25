<?php

namespace ForMage\Blog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{

    const MAIN_TABLE = 'formage_blog';
    const ID_FIELD_NAME = 'entity_id';

    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
    }
}
