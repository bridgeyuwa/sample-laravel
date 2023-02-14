class Category extends Model
{
    use HasFactory;
    
    protected $table = "categories";


    public function institutions()
    {
        return $this->hasMany(Institution::class);
    }
    
    
class College extends Model
{
    use HasFactory;
    
    
     public function programs()
    {
        return $this->hasMany(Program::class);
    }
    
     
    
}


class Honor extends Model
{
    use HasFactory;
    
     public function programs()
    {
        return $this->hasMany(Program::class);
    }
    
}




class Institution extends Model {

    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function programs() {
        return $this->belongsToMany(Program::class);
    }

    public function state() {
        return $this->belongsTo(State::class);
    }

   public function regions() {
        return $this->hasOneThrough(Region::class, State::class);
    }
    
    
    public function Type() {
        return $this->belongsTo(Type::class);
    }

    public function semestertype() {
        return $this->belongsTo(SemesterType::class);
    }

    public function lgas() {
        return $this->hasOneThrough(Lga::Class, State::Class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }   


 public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function subtype()
    {
        return $this->belongsTo('App\Subtype');
    }

    public function subsubtype()
    {
        return $this->belongsTo('App\Subsubtype');
    }

    public function subsubsubtype()
    {
        return $this->belongsTo('App\Subsubsubtype');
    }

}



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



class Region extends Model {

    use HasFactory;

    public function states() {
        return $this->hasMany(State::class);
    }

    public function institutions() {
        return $this->hasManyThrough(Institution::class, State::class);
    }

}


class State extends Model
{
    use HasFactory;
    
    
     public function institutions()
    {
        return $this->hasMany(Institution::class);
    }
    
      public function lgas()
    {
        return $this->hasMany(Lga::class);
    }
    
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    
}


class SemesterType extends Model
{
    use HasFactory;
    
     public function institutions() {
        return $this->hasMany(Institution::class);
    }
}


modify school type into normalized tables




class Type extends Model
{
    protected $table = 'types';
    public $timestamps = false;

    public function subtypes()
    {
        return $this->hasMany('App\Subtype');
    }
}


class Subtype extends Model
{
    protected $table = 'subtypes';
    public $timestamps = false;

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function subsubtypes()
    {
        return $this->hasMany('App\Subsubtype');
    }
}


class Subsubtype extends Model
{
    protected $table = 'subsubtypes';
    public $timestamps = false;

    public function subtype()
    {
        return $this->belongsTo('App\Subtype');
    }

    public function subsubsubtypes()
    {
        return $this->hasMany('App\Subsubsubtype');
    }
}




class Subsubsubtype extends Model
{
    protected $table = 'subsubsubtypes';
    public $timestamps = false;

    public function subsubtype()
    {
        return $this->belongsTo('App\Subsubtype');
    }
}
