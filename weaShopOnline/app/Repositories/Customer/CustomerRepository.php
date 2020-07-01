<?php
namespace App\Repositories\Customer;
use App\Repositories\EloquentRepository;

class CustomerRepository extends EloquentRepository implements CustomerInterface{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Customer::class;
    }
}