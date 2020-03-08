<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'name', 'slug', 'image', 'price', 'description'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
