<?php

namespace ForMage\Learning\Model;
use ForMage\Learning\Api\MaterialInterface;

class MaterialSynthetic implements MaterialInterface
{
    public function getMaterial()
    {
        return "Synthetic";
    }
}
