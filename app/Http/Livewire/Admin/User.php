<?php

namespace App\Http\Livewire\Admin;

use App\Models\User as ModelsUser;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;
    public $message, $name, $hiddenId, $district_id;

    // public function mount($area_id = null){
     
       
    //      if(intval($area_id)>0){
    //          $this->area_id = $area_id;
    //          $area_id = Area::find($area_id);
    //          $this->title = $area_id->name;
    //      }
    //  }
    public function save()
    {
        $this->validate([
            "name" => "required", 
            "district_id"=>"required"
        ]);
        // DistrictModel::find($this->district_id)->area()->create(
        //     ['name'=>$this->name]
        // );
        if(intval($this->hiddenId)>0){
            $area = ModelsUser::find($this->hiddenId);
        }else{
            $area= new ModelsUser();
        }
        $area->name=$this->name;
        $area->district_id=$this->district_id;
        $area->save();
    }
    public function editArea($id)
    {
        $singleData= ModelsUser::find($id);
        $this->name= $singleData->name;
        $this->district_id=$singleData->district_id;
        $this->hiddenId=$singleData->id;
    }
    
    public function addArea()
    {
        $this->name = "";
        $this->district_id=null;
        $this->hiddenId = null;
    }
    
    public function delArea($id)
    {
        $area = ModelsUser::find($id)->delete();
    }
    
    public function render()
    {
        return view('livewire.admin.user');
    }
}
