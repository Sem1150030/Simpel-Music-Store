<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class albumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $possiblePrices = [
            120.00,
            99.99,
            59.99,
            29.95,
            35.50,
            9.99
        ];

        return [
            'artist_id' =>null,
            'genre_id' => null,

            'price' => $possiblePrices[random_int(0, 5)],
            'name' => fake()->sentence(5),
            'release_date' =>fake()->dateTimeBetween('-2 years'),
            'album_img' => 'https://picsum.photos/200',
            'description' => fake()->paragraph(5),
        ];
    }
}
