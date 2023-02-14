<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function states()
    {
        return $this->hasMany(State::class);
    }
}

class State extends Model
{
    public function localGovernments()
    {
        return $this->hasMany(LocalGovernment::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}

class LocalGovernment extends Model
{
    public function institutions()
    {
        return $this->hasMany(Institution::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}

class Institution extends Model
{
    public function programs()
    {
        return $this->belongsToMany(Program::class, 'institution_program');
    }

    public function typeOfInstitution()
    {
        return $this->belongsTo(TypeOfInstitution::class);
    }

    public function categoryOfInstitution()
    {
        return $this->belongsTo(CategoryOfInstitution::class);
    }

    public function semesterSystem()
    {
        return $this->belongsTo(SemesterSystem::class);
    }

    public function catchmentAreas()
    {
        return $this->belongsToMany(State::class, 'catchment_areas');
    }
}

class Program extends Model
{
    public function institutions()
    {
        return $this->belongsToMany(Institution::class, 'institution_program');
    }

    public function utmeSubjects()
    {
        return $this->belongsToMany(UtmeSubject::class);
    }
}

class TypeOfInstitution extends Model
{
    public function institutions()
    {
        return $this->hasMany(Institution::class);
    }
}

class CategoryOfInstitution extends Model
{
    public function institutions()
    {
        return $this->hasMany(Institution::class);
    }
}

class SemesterSystem extends Model
{
    public function institutions()
    {
        return $this->hasMany(Institution::class);
    }
}

class UtmeSubject extends Model
{
    public function programs()
    {
        return $this->belongsToMany(Program::class);
    }
}
