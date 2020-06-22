<?php
namespace App\Repositories\Slide;
use App\Repositories\EloquentRepository;

class SlideRepository extends EloquentRepository implements SlideInterface{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Slide::class;
    }
}