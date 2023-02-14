<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';
    public $timestamps = false;

    public function subtypes()
    {
        return $this->hasMany('App\Subtype');
    }
}




<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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






<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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






<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subsubsubtype extends Model
{
    protected $table = 'subsubsubtypes';
    public $timestamps = false;

    public function subsubtype()
    {
        return $this->belongsTo('App\Subsubtype');
    }
}






<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $table = 'institutions';
    public $timestamps = false;

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



