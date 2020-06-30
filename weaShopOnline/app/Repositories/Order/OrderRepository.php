<?php
namespace App\Repositories\Order;

use App\Repositories\EloquentRepository;

class   OrderRepository extends EloquentRepository implements OrderInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Brand::class;
    }
}