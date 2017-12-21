<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class Test extends Controller
{
    public function tester()
    {
        $data = Client::find(1);
        return $data;
    }
}
