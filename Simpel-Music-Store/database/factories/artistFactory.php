<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artist>
 */
class artistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'SemS',
            'born' => '1999',
            'died' => '-',
            'label' => 'Black Media',
            'mood' => 'Powerfull',
            'style' => 'HipHop',
            'bio' => fake()->paragraph(3),
            'genre' => 'hiphop',
            'gender' => 'Male',
            'logoIMG' => 'https://picsum.photos/200',
            'pfIMG' => 'https://picsum.photos/200',
            'bannerIMG' => 'https://picsum.photos/200',


        ];
    }
}
