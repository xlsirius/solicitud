<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleadoRolTable extends Model
{
    use HasFactory;

    // Relacion Muchos a UNO
   public function users()
   {
     return $this->belongsTo('App\Models\User');
   }
}
