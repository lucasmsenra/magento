<?php
namespace ForMage\Learning\Controller\Page;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Controller\Result\ForwardFactory;
class ResponseType extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;
    protected $jsonFactory;
    protected $raw;
    protected $redirectFactory;
    protected $forwardFactory;
    public function __construct(
        Context $context,
        PageFactory $page,
        JsonFactory $jsonFactory,
        Raw $raw,
        RedirectFactory $redirectFactory,
        ForwardFactory $forwardFactory
    ) {
        parent::__construct($context);
        $this->pageFactory = $page;
        $this->jsonFactory = $jsonFactory;
        $this->raw = $raw;
        $this->redirectFactory = $redirectFactory;
        $this->forwardFactory = $forwardFactory;
    }
    public function execute()
    {
//        return $this->pageFactory->create();
//        return $this->jsonFactory->create()->setData(['name' => 'Abraão', 'city' => 'Rio de Janeiro', 'customer' => [
//            'name' => 'customer name',
//            'email' => 'customer email'
//        ]]);
//        return $this->raw->setContents('That is my raw content');
//        $result = $this->redirectFactory->create();
//        return $result->setPath('learning/page/newroute');
        $forwardFactory = $this->forwardFactory->create();
        return $forwardFactory->setModule('learning')->setController('page')->forward('newroute');
    }
}
