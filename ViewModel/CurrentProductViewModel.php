<?php

namespace DNAFactory\Core\ViewModel;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use DNAFactory\Core\Registry\CurrentProduct;

class CurrentProductViewModel implements ArgumentInterface
{
    /**
     * @var CurrentProduct
     */
    private $currentProduct;

    public function __construct(CurrentProduct $currentProduct)
    {
        $this->currentProduct = $currentProduct;
    }

    public function getProduct(): ProductInterface
    {
        return $this->currentProduct->get();
    }
}
