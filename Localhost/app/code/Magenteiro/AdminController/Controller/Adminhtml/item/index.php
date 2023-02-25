<?php

namespace Magenteiro\AdminController\Controller\Adminhtml\item;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Block\Page;
use Magento\Framework\View\Result\PageFactory;

class index extends Action
{

    protected $resultFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        parent::__construct($context);
        $this->resultFactory = $pageFactory;
    }

    public function execute()
    {
        return $this->resultFactory->create();
    }

    public function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenteiro_AdminController::item');
    }
}
