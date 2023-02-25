<?php

namespace ForMage\Learning\Model;

use ForMage\Learning\Api\SizeInterface;

class SizeSmall implements SizeInterface
{

    public function getSize()
    {
        return "Small";
    }
}
