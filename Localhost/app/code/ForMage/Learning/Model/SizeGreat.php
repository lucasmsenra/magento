<?php

namespace ForMage\Learning\Model;

use ForMage\Learning\Api\SizeInterface;
use ForMage\Learning\Api\MaterialInterface;


class SizeGreat implements SizeInterface
{
    protected $material;
    public function __construct(MaterialInterface $material)
    {
        $this->material = $material;
    }

    public function getSize()
    {
        return "Great";
    }
}
