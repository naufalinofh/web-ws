<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentPrice extends Model
{
    public function inventory()
    {
        return $this->belongsTo('App\Inventory', 'inventory_id');
    }
}
