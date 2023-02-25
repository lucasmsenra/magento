<?php

namespace ForMage\NewsletterModal\Controller\Modal;

use ForMage\NewsletterModal\Model\Modal;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Request\Http;
use Magento\Framework\App\ResponseInterface;

class Index extends Action
{
    protected $_helper;
    protected $_modalModel;

    public function __construct(
        Context $context,
        Modal $modalModel,
        Http $request
    ) {
        parent::__construct($context);
        $this->_modalModel = $modalModel;
        $this->_request = $request;
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $email = $this->_request->getPostValue('email');
        if ($email) {
            $this->_modalModel->addEmailNewsletter($email);
        }
    }
}
