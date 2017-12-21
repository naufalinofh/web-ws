<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public function getListAttribute($value)
    {
        $separate = explode('|', $value);
        $output = array(
            'id' => explode(',', $separate[0]),
            'jumlah' => explode(',', $separate[1])
        );
        return $output;
    }
    
    public function setListAttribute($value)
    {
        $this->attributes['list'] = (implode(',', $value['id'])).
                                    '|'.
                                    (implode(',', $value['barang']));
    }
}