<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\District;

class Area extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table ="area";
    protected $fillable=['name','slug'];
    
    public function district()
    {
        return $this->belongsTo(District::class);
    }
    public function sportCenter()
    {
    return $this->hasMany(SportCenter::class);
    }

}

