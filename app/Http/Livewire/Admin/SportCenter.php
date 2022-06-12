<?php

namespace App\Http\Livewire\Admin;

use App\Models\Area;
use App\Models\ArenaCategory;
use App\Models\SportCenter as ModelsSportCenter;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\District as DistrictModel;
use App\Models\Images;
use App\Models\User;
use App\Models\Team;

use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;

class SportCenter extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $message, $name, $administrator, $image, $location, $hiddenId, $area_id, $arena_category_id, $short_description, $district;
    
    protected function createTeam(User $user,$sportsTeamName){
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => $sportsTeamName,
            'personal_team' => true,
        ]));
    }

    public function save(){
        $this->validate([
            "name" => "required",
            "area_id" => "required",
            "location" => "required",
            "arena_category_id" => "required"
        ]);
        $admin = $this->administrator;
        $admin['sportsTeamName'] = $this->name;
        
        DB::transaction(function () use ($admin) {
            $sportsTeamName = $admin['sportsTeamName'];
            return tap(User::create([
                'name' => $admin['name'],
                'email' => $admin['email'],
                'password' => 'asdf',
            ]), function (User $user) use ($sportsTeamName) {
                $this->createTeam($user,$sportsTeamName);
            });
        });
        
        if (intval($this->hiddenId) > 0) {
            $sportCenters = ModelsSportCenter::find($this->hiddenId);
        } else {
            $sportCenters = new ModelsSportCenter();
        }
        $sportCenters->name = $this->name;
        $sportCenters->location = $this->location;
        $sportCenters->arena_category_id = $this->arena_category_id;
        $sportCenters->area_id = $this->area_id;
        $sportCenters->short_description = $this->short_description;
        $sportCenters->save();
        if ($sportCenters->image()->first()) {
            $sportCenters->image()->first()->update(['src' => $this->image->store("uploads", "public")]);
        } else {
            $sportCenters->image()->save(new Images(['src' => $this->image->store("uploads", "public")]));
        }
    }

    public function editsportCenter($id){
        $singleData = ModelsSportCenter::find($id);
        $this->name = $singleData->name;
        $this->location = $singleData->location;
        $this->image = $singleData->image()->first()->src ?? null;
        $this->arena_category_id = $singleData->arena_category_id;
        $this->short_description = $singleData->short_description;
        $this->area_id = $singleData->area_id;
        $this->hiddenId = $singleData->id;
    }

    public function addsportCenter(){
        $this->name = "";
        $this->location = "";
        $this->area_id = null;
        $this->image = "";
        $this->arena_category_id = null;
        $this->short_description = "";
        $this->hiddenId = null;
    }


    public function delsportCenter($id){
        $sportCenters = ModelsSportCenter::find($id)->delete();
    }


    public function render(){
        $sportCenters = ModelsSportCenter::paginate(4);
        $categories = ArenaCategory::all();
        $districts = DistrictModel::all();
        $areas = Area::where('district_id', $this->district)->get();
        return view('livewire.admin.sport-center', [
            "categories" => $categories, 'sportCenters' => $sportCenters, 'areas' => $areas, 'districts' => $districts
        ]);
    }
}
