<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasSlug;
    
    /** 
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected $table = 'products';

    public $primaryKey = 'id';

    public $timestamps = true;

    // First letter uppercase Accessors
    public function getSizeAttribute($value)
    {
        return ucfirst($value);
    }
    public function getColourAttribute($value)
    {
        return ucfirst($value);
    }
    public function getTypeAttribute($value)
    {
        return ucfirst($value);
    }
}
