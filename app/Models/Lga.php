<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    use HasFactory;
    
      public function states()
    {
        return $this->belongsTo(College::class);
    }
    
     public function institutions()
        {
            return $this->hasManyThrough(Institution::Class, State::Class);
        }
        
    
}
