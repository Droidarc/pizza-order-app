<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    protected $guarded = [];

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function productDetail()
    {
      return $this->hasOne(ProductDetail::class);
    }

    public function category()
    {
      return $this->belongsTo(Category::class);
    }

}
