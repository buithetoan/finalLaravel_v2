<?php
namespace App\Repositories\User;
use App\Repositories\EloquentRepository;

class UserRepository extends EloquentRepository implements UserInterface{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\User::class;
    }
}