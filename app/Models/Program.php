<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model {

    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function colleges() {
        return $this->belongsTo(College::class);
    }

    public function institutions() {
        return $this->belongsToMany(Institution::class);
    }

    public function honors() {
        return $this->belongsTo(Honor::class);
    }

}
