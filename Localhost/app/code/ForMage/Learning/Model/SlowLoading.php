<?php

namespace ForMage\Learning\Model;

class SlowLoading
{
    public function __construct()
    {
        echo "The SlowLoading class was loaded"."<br/>";
    }

    public function getValue()
    {
        return "Slowloading value";
    }

}
