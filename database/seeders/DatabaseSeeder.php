<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Komik;
use App\Models\Genre;
use App\Models\Orang;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Orang::factory(10)->create();

        Komik::create([
            'genre_id' => '1',
            'judul' => 'Test1',
            'slug' => 'test1',
            'penulis' => 'test1',
            'penerbit' => 'test1',
            'sampul' => 'default.png'
        ]);

        Komik::create([
            'genre_id' => '2',
            'judul' => 'Test2',
            'slug' => 'test2',
            'penulis' => 'test2',
            'penerbit' => 'test2',
            'sampul' => 'default.png'
        ]);

        Komik::create([
            'genre_id' => '3',
            'judul' => 'Test3',
            'slug' => 'test3',
            'penulis' => 'test3',
            'penerbit' => 'test3',
            'sampul' => 'default.png'
        ]);

        Genre::create([
            'nama' => 'Comedy',
            'slug' => 'comedy'
        ]);

        Genre::create([
            'nama' => 'Drama',
            'slug' => 'drama'
        ]);

        Genre::create([
            'nama' => 'Horror',
            'slug' => 'horror'
        ]);

        User::create([
            'nama' => 'Ferdy Hendriawan',
            'email' => 'ferdyhwn@gmail.com',
            'password' => bcrypt('rahasia')
        ]);
    }
}
