<?php
namespace App\Repositories\OrderDetail;

use App\Repositories\EloquentRepository;

class OrderDetailRepository extends EloquentRepository implements OrderDetailInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\OrderDetail::class;
    }
}