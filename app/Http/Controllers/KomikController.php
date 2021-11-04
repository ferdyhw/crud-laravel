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
            'judul' => 'App Laravel | Komik',
            'active' => 'Komik',
            'komik' =>Komik::latest()->filter()->get(),
        ];
        return view('komik.index', $data);
    }

    public function tambah()
    {
        $data = [
            'judul' => 'App Laravel | Tambah Data Komik',
            'active' => null,
        ];
        return view('komik.create', $data);
    }

    public function prosesTambah(Request $request)
    {
        $judul = $request->judul;
        $slug = str_replace(' ', '-', strtolower($judul));

        $data = [     
            'judul' => $request->judul,
            'slug' => $slug,
            'genre_id' => $request->genre_id,  //mt_rand(1, 3),
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'sampul' => 'default.png'
        ];
        // dd($data);
        DB::table('komiks')->insert($data);

        return redirect('/komik')->with('status', 'Data komik berhasil ditambahkan.');
    }

    public function ubah(Komik $post)
    {
        $data = [
            'judul' => 'App Laravel | Ubah Data Komik',
            'active' => null,
            'komik' => $post,
        ];
        return view('komik.update', $data);
    }

    public function prosesUbah(Request $request, Komik $post)
    {
        $data = [
            'genre_id' => $request->genre_id,
            'judul' => $request->judul,
            'slug' => $request->slug,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'sampul' => 'default.png'
        ];
        // dd($data);
        DB::table('komiks')->where('slug', $post->slug)->update($data);

        return redirect('/komik/detail/'.$post->slug)->with('status', 'Data komik berhasil diubah.');
    }

    public function detail(Komik $post)
    {
        $data = [
            'judul' => 'App Laravel | Detail Data Komik',
            'active' => null,
            'komik' => $post,
        ];
        // dd($data);

        return view('komik.detail', $data);
    }

    public function hapus(Komik $post)
    {
        DB::table('komiks')->where('id', $post->id)->delete();

        return redirect('/komik')->with('status', 'Data komik berhasil dihapus.');
    }
}
