<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $table = "price";
    protected $fillable = ['price'];

    public function scehdlue()
    {
        return $this->hasMany(Price::class);
    }
}