<?php
namespace Magenteiro\InventoryIntegration\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Test extends Command
{
    public function __construct(\Magento\Catalog\Model\ResourceModel\Product\Collection $productCollection)
    {
        $this->productCollection = $productCollection;
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('magenteiro:inventoryTest')
            ->setDescription('Simple test');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var \Magento\Catalog\Model\ResourceModel\Product\Collection $productCollection */
        $productCollection = $this->productCollection;
        foreach ($productCollection->toArray() as $item) {
            $output->writeln($item['sku']);
        }
        $output->writeln('Pico de memória: ' . memory_get_peak_usage()/1024/1024 . 'MiB');
    }
}