<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasketProduct extends Model
{
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
