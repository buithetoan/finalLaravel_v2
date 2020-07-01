<?php
namespace App\Repositories\Slide;
use App\Repositories\EloquentRepository;

class SlideRepository extends EloquentRepository implements SlideInterface{
    /**
     * get model
     * @return string
     */
    public function getTopSlide($top){
        return $this->_model::where('is_deleted', 'false')->take($top)->get();
    }
    public function getModel()
    {
        return \App\Models\Slide::class;
    }
}