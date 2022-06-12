<?php

namespace App\Http\Livewire;

use App\Models\Area;
use App\Models\ArenaCategory;
use App\Models\SportCenter as ModelsSportCenter;
use Livewire\Component;

class Welcome extends Component
{
    public $location, $searchArena;
    
    public function search()
    {  $sportCenters = ModelsSportCenter::when($this->location,function($q){
        return $q->where('location','like','%'.$this->location.'%');
    })->when($this->searchArena,function($q){
        return $q->where('arena_category_id',$this->searchArena);
    })->get();
        
        return view('livewire.location');
    }
    public function render()
    {
     
        $categories = ArenaCategory::all();
        $sportCenters = ModelsSportCenter::all();
        return view('livewire.welcome',['categories'=>$categories,'sportCenters'=>$sportCenters]);
    }
}
