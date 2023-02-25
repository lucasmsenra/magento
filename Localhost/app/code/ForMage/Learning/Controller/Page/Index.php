<?php
namespace ForMage\Learning\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use ForMage\Learning\Api\SizeInterface;
use ForMage\Learning\Api\ColorInterface;
use ForMage\Learning\Model\Product\Shoe;
use ForMage\Learning\Model\Product\Shirt;
use Magento\Framework\Event\ManagerInterface;
use ForMage\Learning\Model\SlowLoading;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $size;
    protected $color;
    protected $product;
    protected $shirt;
    protected $eventManager;
    protected $slowLoading;

    public function __construct(
        Context          $context,
        SizeInterface    $size,
        ColorInterface   $color,
        Shoe             $product,
        Shirt            $shirt,
        ManagerInterface $eventManager,
        SlowLoading $slowLoading
    )
    {
        parent::__construct($context);
        $this->size = $size;
        $this->color = $color;
        $this->product = $product;
        $this->shirt = $shirt;
        $this->eventManager = $eventManager;
        $this->slowLoading = $slowLoading;
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('id', 0);
        if ($id) {
            echo $this->slowLoading->getValue();
        } else {
            echo "SlowLoading was not loaded";
        }
    }
}
