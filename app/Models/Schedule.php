<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table ="schedule";
    protected $fillable=['time'];
    
    public function days()
    {
        return $this->belongsTo(Days::class);
    }
    public function price()
    {
        return $this->hasMany(Price::class);
    }
}
