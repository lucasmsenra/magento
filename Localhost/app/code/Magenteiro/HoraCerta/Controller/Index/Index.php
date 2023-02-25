<?php

namespace Magenteiro\HoraCerta\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Stdlib\DateTime\Timezone;

class Index implements HttpGetActionInterface
{

    private Timezone $timezone;
    private ResultFactory $resultFactory;

    public function __construct(Timezone $timezone, ResultFactory $resultFactory)
    {
        $this->timezone = $timezone;
        $this->resultFactory = $resultFactory;
    }

    public function execute()
    {
//        echo $this->timezone->getConfigTimezone();
//        echo $this->timezone->convertConfigTimeToUtc($this->timezone->date()); exit;
        $conteudo = $this->timezone->date()->format('d/m/Y H:i');
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW); //Raw porque o conteúdo é de uma string
        $result->setContents($conteudo);
        return $result;
    }
}

//a forma antiga de fazer o controller é através da classe Action/Action. No Construtor tem que puxar o construtor pai com a variável $context, no caso
