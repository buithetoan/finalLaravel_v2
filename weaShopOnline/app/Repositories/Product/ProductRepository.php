<?php
namespace App\Repositories\Product;

use App\Repositories\EloquentRepository;

class ProductRepository extends EloquentRepository implements ProductInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Product::class;
    }

    /**
     * Get 5 brand
     * @return mixed
     */
    public function getProduct()
    {
        return $this->_model::take(5)->get();
    }

    public function getTopHotProduct($top){
        return $this->_model::where('is_hot', 1)->where('is_deleted', 0)->take($top)->get();
    }

    public function getTopNewProduct($top){
        return $this->_model::where('is_new', 1)->where('is_deleted', 0)->take($top)->get();
    }

    public function getTopSaleProduct($top){
        return $this->_model::where('promotion_price', '!=', null)->where('is_deleted', 'false')->take($top)->get();
    }
    public function getTotalProduct(){
        return $this->_model::where('is_deleted', 0)->get()->count();
    }
}