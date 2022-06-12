<?php

namespace App\Http\Livewire;

use App\Models\ArenaCategory;
use App\Models\SportCenter;
use Livewire\Component;

class SportCategory extends Component
{
   public $search;
   protected $queryString = ['search'];
 

    public function render()
    {
        $categories = ArenaCategory::all();
        $sportCenters = SportCenter::when($this->search,function($q){
            return $q->where('arena_category_id',$this->search);
        })->get();
        return view('livewire.sport-category',['sportCenters'=>$sportCenters,'categories'=>$categories]);
    }
}
