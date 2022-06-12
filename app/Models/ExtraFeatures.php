<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraFeatures extends Model
{
    use HasFactory;
    protected $table ="extra_features";
    protected $fillable=['features'];

    public function sport()
    {
        return $this->belongsTo(Sports::class);
    }
}
