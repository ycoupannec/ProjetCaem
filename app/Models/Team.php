<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Carbon\Carbon;

class Team extends Model
{
    use CrudTrait;

    protected $fillable = [
        'name',
        'firstname',
        'instrument',
        'type',
        'status',
        'picture',
        'description'
    ];
<<<<<<< HEAD

	
}

function setPictureAttribute($value)
=======

    public function setPictureAttribute($value)
>>>>>>> 1a66353357feb3f9bbeae9ce0e68251cd5d6534b
    {
        $attribute_name = "picture";
        $disk = "uploads";
        $destination_path = "photo_team";
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
<<<<<<< HEAD
    }
=======
    }

}

>>>>>>> 1a66353357feb3f9bbeae9ce0e68251cd5d6534b
