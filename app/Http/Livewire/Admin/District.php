<?php

namespace App\Http\Livewire\Admin;
use App\Models\District as DistrictModel;
use Livewire\Component;
use Livewire\WithPagination;

class District extends Component
{
    use WithPagination;
    public $message, $name, $hiddenId, $area_id;

    
    public function save()
    {
        $this->validate([
            "name" => "required", 
        ]);
        // if(intval($this->hiddenId)>0){
        //     $district = DistrictModel::find($this->hiddenId);
        // }else{
            $district= new DistrictModel();
        // }
        $district->name=$this->name;
        $district->save();

       
    }

    
    public function editDistrict($id)
    {
        $singleData= DistrictModel::find($id);
        $this->name= $singleData->name;
        $this->hiddenId=$singleData->id;
    }
    
    public function addDistrict()
    {
        $this->name = "";
        $this->hiddenId = null;
    }
    
    public function delDistrict($id)
    {
        $district = DistrictModel::find($id)->delete();
    }
   
    public function render()
    {
        $districts = DistrictModel::paginate(4);
        return view('livewire.admin.district', [
            "districts" => $districts,
        ]);
    }
}
