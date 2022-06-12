<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ArenaCategory;

class SportCenter extends Model
{
    use HasFactory;
    protected $table = "sport_center";
    protected $fillable = ['name', 'slug', 'location', 'short_description'];

    public function arena_category()
    {
        return $this->belongsTo(ArenaCategory::class);
    }
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    public function image()
    {
        return $this->hasMany(Images::class);
    }
    public function teams()
    {
        return $this->belongsTo(Team::class);
    }
}
