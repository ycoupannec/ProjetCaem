<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Article extends Model
{
    use CrudTrait;
    use Sluggable, SluggableScopeHelpers;

 

    protected $table = 'articles';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['slug', 'title', 'content', 'image', 'status', 'category_id', 'featured', 'date'];

    protected $casts = [
        'featured'  => 'boolean',
        'date'      => 'date',
    ];

   
     * @return array
    
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug_or_title',
            ],
        ];
    }


    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    
  

    public function scopePublished($query)
    {
        return $query->where('status', 'PUBLISHED')
                    ->where('date', '<=', date('Y-m-d'))
                    ->orderBy('date', 'DESC');
    }

    
    public function getSlugOrTitleAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }

        return $this->title;
    }

}