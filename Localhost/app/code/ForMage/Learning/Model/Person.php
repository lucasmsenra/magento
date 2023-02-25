<?php

namespace ForMage\Learning\Model;

class Person
{
    public function __call(string $name, array $arguments)
    {
        $type = substr($name, 0, 3);
        $key = strtolower(substr($name, 3));
        if ($key == "name") {
            switch ($type) {
                case "set":
                    $this->name = $arguments[0];
                    return $this;
                case "get":
                    return $this->name;
            }
        }
        return $this;
    }
}

