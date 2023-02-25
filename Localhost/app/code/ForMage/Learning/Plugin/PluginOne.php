<?php

namespace ForMage\Learning\Plugin;

class PluginOne
{
//    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
//    {
//        return "Plugin Before | ".$name;
//    }
//
//    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
//    {
//        return $result. " | Plugin After";
//    }
//
//    public function aroundGetName(\Magento\Catalog\Model\Product $subject, callable $proceed)
//    {
//        echo " --- Before Proceed"."<br/>";
//        $name = $proceed();
//        echo $name."<br/>";
//        echo " --- After Proceed"."<br/>";
//        return $name;
//    }
    public function beforeExecute(\ForMage\Learning\Controller\Page\Index $subject)
    {
        echo "BEFORE SORT ORDER 10"."<br/>";
    }
    public function afterExecute(\ForMage\Learning\Controller\Page\Index $result)
    {
        echo "AFTER SORT ORDER 10"."<br/>";
    }
    public function aroundExecute(\ForMage\Learning\Controller\Page\Index $result, callable $proceed)
    {
        echo "AROUND BEFORE PROCEED 10"."<br/>";
        $proceed();
        echo "AROUND AFTER PROCEED 10"."<br/>";
    }
}
