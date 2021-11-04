<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'App Laravel | Home',
            'active' => 'Home',
        ];

        return view('home.index', $data);
    }
}
