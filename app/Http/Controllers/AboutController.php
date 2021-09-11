<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'About',
        ];

        return view('about.index', $data);
    }
}
