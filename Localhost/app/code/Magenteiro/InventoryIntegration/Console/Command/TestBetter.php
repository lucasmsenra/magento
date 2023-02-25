<?php
namespace Magenteiro\InventoryIntegration\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestBetter extends Command
{
    public function __construct(
        \Magento\Catalog\Model\ResourceModel\Product\Collection $productCollection,
        \Magento\Framework\Model\ResourceModel\Iterator $iterator
        )
    {
        $this->productCollection = $productCollection;
        $this->iterator = $iterator;
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('magenteiro:inventoryTestBetter')
            ->setDescription('Simple test with faster loop');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var \Magento\Catalog\Model\ResourceModel\Product\Collection $productCollection */
        $productCollection = $this->productCollection;
        $this->output = $output;

        $this->iterator ->walk($productCollection->getSelect(), [[$this,'updateItems']]);

        $output->writeln('Pico de memória: ' . memory_get_peak_usage()/1024/1024 . 'MiB');
    }

    public function updateItems($args)
    {
        $sku = $args['row']['sku'];
        $this->output->writeLn($sku);
    }
}