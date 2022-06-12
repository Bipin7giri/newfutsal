<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Area;

class District extends Model
{
    
    use SoftDeletes;
    use HasFactory;
    protected $table ="district";
    protected $fillable=['name','slug'];
    
    public function area()
    {
    return $this->hasMany(Area::class);
    }
}
