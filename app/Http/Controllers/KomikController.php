<?php

namespace App\Http\Controllers;

use App\Models\Komik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KomikController extends Controller
{

    public function index()
    {
        $data = [
            'judul' => 'Komik',
            'komik' => Komik::all(),
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

    public function prosesTambah(Request $request)
    {
        // Blom jadi cok
        $request->validate([
            'judul' => 'required',
            'slug'  => 'required',
            'penulis'   => 'required',
            'penerbit'  => 'required',
            'sampul'    => 'sampul'
        ]);
        Komik::create($request->all());
        
        echo '<pre>';
        print_r($request);die;
    }

    public function detail($slug)
    {
         $data = [
             'judul' => 'Detail Komik',
             'komik' => Komik::whereSlug($slug)->get(),
         ];
         
         return view('komik.detail', $data);
    }

}
