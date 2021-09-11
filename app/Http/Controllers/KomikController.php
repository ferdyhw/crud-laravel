<?php

namespace App\Http\Controllers;

use App\Models\KomikModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KomikController extends Controller
{

    public function index()
    {
        $data = [
            'judul' => 'Komik',
            'komik' => DB::table('komik')->get(),
        ];
        return view('komik.index', $data);
    }

    public function tambah()
    {
        $data = [
            'judul' => 'Tambah Komik',
        ];
        return view('komik.create', $data);
    }

    public function detail($slug)
    {
         $data = [
             'judul' => 'Detail Komik',
             'komik' => DB::table('komik')->where('slug', $slug)->get(),
         ];

        // dd($data);
         return view('komik.detail', $data);
    }

}
