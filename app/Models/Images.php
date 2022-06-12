<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
   use HasFactory;
   protected $table = "images";
   protected $fillable = ["src", "driveid"];

   public function sport()
   {
      return $this->belongsTo(Sports::class);
   }
   public function sportCenter()
   {
      return $this->belongsTo(SportCenter::class);
   }
}
