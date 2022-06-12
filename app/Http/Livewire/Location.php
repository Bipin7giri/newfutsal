<?php

namespace App\Http\Livewire;

use App\Models\ArenaCategory;
use App\Models\SportCenter as ModelsSportCenter;
use League\CommonMark\Node\Query\OrExpr;
use Livewire\WithPagination;

use Livewire\Component;

class Location extends Component
{
    use WithPagination;
    public $search, $searchCategory;
    protected $queryString = ['search','searchCategory'];

    public function render()
    {
        $sportCenters = ModelsSportCenter::when($this->search,function($q){
                                            return $q->where('name','like','%'.$this->search.'%')
                                            ->orwhere('location','like','%'.$this->search.'%');
                                        })->when($this->searchCategory,function($q){
                                            return $q->where('arena_category_id',$this->searchCategory);
                                        })->paginate(4);
        return view('livewire.location', [
            'sportCenters' => $sportCenters, 
            'categories'=>ArenaCategory::all(),
            
        ]);
    
    }
}
