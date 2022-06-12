<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\SportCenter;


class ArenaCategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table ="arena_category";
    protected $fillable=['category_name','slug','short_description'];


    public function sport_center()
    {
       return $this->hasMany(SportCenter::class);
    }
   public function sport()
   {
       return $this->hasMany(Sports::class);
   }
   
}
