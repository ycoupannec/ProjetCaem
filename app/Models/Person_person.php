<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Person_person extends Model
{
    use CrudTrait;

  
    protected $fillable = ['person_id', 'people_link_id'];
  
}
