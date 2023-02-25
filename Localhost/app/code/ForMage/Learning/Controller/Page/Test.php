<?php

namespace ForMage\Learning\Controller\Page;

use Magento\Framework\App\Action\Context;
use ForMage\Learning\Model\Person;
class Test extends \Magento\Framework\App\Action\Action
{
    protected $person;
    public function __construct(
        Context $context,
        Person $person
    ) {
        parent::__construct($context);
        $this->person = $person;
    }
    public function execute()
    {
        $this->person->setName("Abraão Marques");
        echo $this->person->getName();
    }
}
