<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programnd extends Model
{
    use HasFactory;
    
    protected $table = 'programs';


    public function colleges()
    {
        return $this->belongsToMany(College::class);
    }
    
     public function institutions()
    {
        return $this->belongsToMany(Institution::class);
    }
}
