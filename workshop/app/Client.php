<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function getLembagaAttribute($value)
    {
        return explode(',', $value);
    }

    public function setLembagaAttribute($value)
    {
        $this->attributes['lembaga'] = implode(',', $value);
    }
}
