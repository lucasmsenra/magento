<?php

namespace ForMage\TaxvatValidator\Controller\Validate;

use ForMage\TaxvatValidator\Model\Validate;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Taxvat implements HttpPostActionInterface
{
    private $jsonFactory;
    private $taxvatValidate;
    private $request;

    public function __construct(
        JsonFactory $jsonFactory,
        Validate $taxvatValidate,
        RequestInterface $request
    ) {
        $this->jsonFactory = $jsonFactory;
        $this->taxvatValidate = $taxvatValidate;
        $this->request = $request;
    }

    public function execute()
    {
        $result = $this->taxvatValidate->taxvat($this->request->getParam('taxvat'));
        $json = $this->jsonFactory->create();
        return $json->setData(['message' => $result]);
    }
}
