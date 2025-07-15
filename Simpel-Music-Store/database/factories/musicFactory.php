<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Music>
 */
class musicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'artist_id' =>null,
            'album_id' => null,
            'genre_id' => null,
            'name' => fake()->sentence(5),
            'duraction_sec' => fake()->numberBetween(100, 500),
            'release_date' =>fake()->dateTimeBetween('-2 years')
        ];
    }
}
