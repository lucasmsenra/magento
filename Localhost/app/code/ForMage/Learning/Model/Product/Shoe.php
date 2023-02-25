<?php

namespace ForMage\Learning\Model\Product;

use ForMage\Learning\Api\SizeInterface;
use ForMage\Learning\Api\ColorInterface;

class Shoe
{
    protected $size;
    protected $color;
    public function __construct(ColorInterface $color, SizeInterface $size)
    {
        $this->color = $color;
        $this->size = $size;
    }
    public function getShoe()
    {
        return "My Shoe is {$this->size->getSize()} and {$this->color->getColor()}";
    }
}
