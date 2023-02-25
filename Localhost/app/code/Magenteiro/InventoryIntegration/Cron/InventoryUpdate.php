<?php

namespace Magenteiro\InventoryIntegration\Cron;

use Magento\Catalog\Ui\DataProvider\Product\ProductCollectionFactory;
use Magento\CatalogInventory\Api\StockRegistryInterface;
use Magento\Framework\Model\ResourceModel\Iterator;
use Psr\Log\LoggerInterface;

/**
 * Class InventoryUpdate
 *
 * @author    Ricardo Martins
 * @copyright 2018 Magenteiro.com/magento2
 * @package   Magenteiro\InventoryIntegration\Cron
 */
class InventoryUpdate
{
    /** @var Iterator  */
    private $iterator;

    /** @var StockRegistryInterface  */
    private $stockRegistry;

    /** @var ProductCollectionFactory  */
    private $productCollection;

    /** @var LoggerInterface  */
    private $logger;

    /**
     * InventoryUpdate constructor.
     *
     * @param StockRegistryInterface   $stockRegistry
     * @param Iterator                 $iterator
     * @param ProductCollectionFactory $productCollection
     * @param LoggerInterface          $logger
     */
    public function __construct(
        StockRegistryInterface $stockRegistry,
        Iterator $iterator,
        ProductCollectionFactory $productCollection,
        LoggerInterface $logger
    )
    {
        $this->stockRegistry = $stockRegistry;
        $this->iterator = $iterator;
        $this->productCollection = $productCollection;
        $this->logger = $logger;
    }

    public function execute()
    {
        $productCollection = $this->productCollection->create();
        $this->iterator ->walk($productCollection->getSelect(), [[$this,'updateItems']]);
    }

    public function updateItems($args)
    {
        $sku = $args['row']['sku'];
        $stockItem = $this->stockRegistry->getStockItemBySku($sku);
        $currentQty = $stockItem->getQty(); //qtd atual no estoque (você pode pular a atualização caso a quantidade não tenha sido alterada)

        //@TODO Buscar quantidade na fonte da integração.
        $newQty = 123;

        $stockItem->setQty($newQty); //Nova quantidade
        $stockItem->setIsInStock(($newQty > 0)); //Em estoque? true ou false

        $this->logger->debug('Atualizando inventário...', ['sku' => $sku, 'qtd anterior' => $currentQty, 'novaQtd'=> $newQty]);
        $this->stockRegistry->updateStockItemBySku($sku, $stockItem);
    }
}