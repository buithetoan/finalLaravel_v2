<?php
namespace App\Repositories\Product;

interface ProductInterface
{
    /**
     * Get 5 brand
     * @return mixed
     */
    public function getProduct();
    public function getTopHotProduct($top);
    public function getTopNewProduct($top);
    public function getTopSaleProduct($top);
}