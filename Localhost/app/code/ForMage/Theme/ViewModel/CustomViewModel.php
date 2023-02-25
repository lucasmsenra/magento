<?php

namespace ForMage\Theme\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;

class CustomViewModel implements ArgumentInterface
{
    private $productRepository;

    public function __construct(
        ProductRepositoryInterface $productRepository,
    ) {
        $this->productRepository = $productRepository;
    }

    public function getProductNameViewModel($sku)
    {
        $product = $this->productRepository->get($sku);
        return $product->getName();
    }
}
