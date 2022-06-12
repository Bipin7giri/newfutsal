<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sports extends Model
{
    use HasFactory;
    protected $table = "sports";
    protected $fillable = ['name', 'slug', 'tags', 'short_description'];

    public function sportCenter()
    {
        return $this->belongsTo(SportCenter::class);
    }
    public function extraFeatures()
    {
        return $this->hasMany(ExtraFeatures::class);
    }
    public function category()
    {
        return $this->belongsTo(ArenaCategory::class);
    }
    public function days()
    {
        return $this->hasMany(Days::class);
    }
    public function image()
    {
        return $this->hasMany(Images::class);
    }
}
