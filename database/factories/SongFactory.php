<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'musicName' => fake()->randomElement(['Berlin to west africa','Good for You','Man Down','Atlantis','the lost soul','SeYa','The way life goes']),
            'artistName' => fake()->name,
            'musicPicture' => fake()->imageUrl(),
            'musicFile' => fake()->url(),
        ];
    }
}
