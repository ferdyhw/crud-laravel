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

        Komik::factory(10)->create();

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
