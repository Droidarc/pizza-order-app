<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Basket extends Model
{
  protected $guarded = [];

  public function order()
  {
    return $this->hasOne(Order::class);
  }

  public function sepet_urunler()
{
    return $this->hasMany(BasketProduct::class);
}

  public function sepet_urun_adet()
    {
        return DB::table('basket_products')->where('basket_id',$this->id)->sum('number');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
