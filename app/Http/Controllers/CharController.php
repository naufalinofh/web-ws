<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CharacterController;

class CharController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function unspace($s)
    {
        //return strng without space, and change space into underscores
        $s = str_replace(' ', '_', $s);
        return $s;
    }

    public function destroy($id)
    {
        //
    }
}
