<?php

namespace ForMage\Learning\Model;

use ForMage\Learning\Api\ColorInterface;

class ColorWhite implements ColorInterface
{

    public function getColor()
    {
        return "White";
    }
}
