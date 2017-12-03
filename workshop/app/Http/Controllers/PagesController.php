<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    var $title = "Workshop JK";

    public function index()
    {
        return view('pages.index')->with('title', $this->title);
    }

    public function about()
    {
        return view('pages.about')->with('title', $this->title);
    }

    public function services()
    {
        $data = array(
            'title' => $this->title,
            'services' => ['Peminjaman', 'Proyek', 'Pendidikan']
        );
        return view('pages.services')->with($data);
    }
}
