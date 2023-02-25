<?php

namespace ForMage\Learning\Model;

use ForMage\Learning\Api\ColorInterface;

class ColorBlack implements ColorInterface
{

    public function getColor()
    {
        return "Black";
    }
}
