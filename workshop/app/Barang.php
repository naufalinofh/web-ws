<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function getMetaAttribute($value)
    {
        return explode(',', $value);
    }

    public function setMetaAttribute($value)
    {
        $this->attributes['meta'] = implode(',', $value);
    }
}
