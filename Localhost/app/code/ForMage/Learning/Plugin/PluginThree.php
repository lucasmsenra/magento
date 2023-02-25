<?php

namespace ForMage\Learning\Plugin;

class PluginThree
{
    public function beforeExecute(\ForMage\Learning\Controller\Page\Index $subject)
    {
        echo "BEFORE SORT ORDER 30"."<br/>";
    }
    public function afterExecute(\ForMage\Learning\Controller\Page\Index $result)
    {
        echo "AFTER SORT ORDER 30"."<br/>";
    }
    public function aroundExecute(\ForMage\Learning\Controller\Page\Index $result, callable $proceed)
    {
        echo "AROUND BEFORE PROCEED 30"."<br/>";
        $proceed();
        echo "AROUND AFTER PROCEED 30"."<br/>";
    }
}
