<?php

namespace App\Http\Livewire\Admin;

use App\Models\ArenaCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;
    public $category_name, $short_description, $message, $hiddenId;
    public function save()
    {
      
        $this->validate([
            "category_name" => "required", 
           
        ]);
        if(intval($this->hiddenId)>0){
            $category = ArenaCategory::find($this->hiddenId);
        }else{
            $category= new ArenaCategory();
        }
        $category->category_name=$this->category_name;
        $category->short_description=$this->short_description;
        $category->save(); 
    }
      
    public function editCategory($id)
    {
        $singleData= ArenaCategory::find($id);
        $this->category_name= $singleData->category_name;
        $this->short_description= $singleData->short_description;
        $this->hiddenId=$singleData->id;
    }
        
    public function addCategory()
    {
        $this->category_name = "";
        $this->short_description="";
        $this->hiddenId = null;
    }
    public function delCategory($id)
    {
        $category = ArenaCategory::find($id)->delete();
    }

    public function render()
    {
        $categories= ArenaCategory::paginate(4);
        return view('livewire.admin.category',['categories'=>$categories]);
    }
}
