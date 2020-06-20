<?php
namespace App\Repositories\Brand;

use App\Repositories\EloquentRepository;

class BrandRepository extends EloquentRepository implements BrandInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Brand::class;
    }

    /**
     * Get 5 brand
     * @return mixed
     */
    public function getBrand()
    {
        return $this->_model::take(5)->get();
    }
    
}