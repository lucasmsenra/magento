<?php

namespace Mage2tv\NonSharedDependency\Example;

class Dependency
{
    /**
     * @var
     */
    private $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

}
