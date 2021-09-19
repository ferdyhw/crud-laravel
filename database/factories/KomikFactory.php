<?php

namespace Database\Factories;

use App\Models\Komik;
use Illuminate\Database\Eloquent\Factories\Factory;

class KomikFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Komik::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(1, 2)),
            'slug' => $this->faker->slug(),
            'penulis' => $this->faker->name(),
            'penerbit' => $this->faker->company(),
            'sampul' => 'default.png',
            'genre_id' => mt_rand(1, 3)
        ];
    }
}
