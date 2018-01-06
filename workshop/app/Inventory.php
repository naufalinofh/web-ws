<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    public function price()
    {
        return $this->hasMany('App\RentPrice', 'inventory_id');
    }

    public function good()
    {
        return $this->hasMany('App\Good');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
