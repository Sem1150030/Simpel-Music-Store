<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Music;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Artist::factory(33)->create()->each(function(Artist $artist){
            $numAlbums = random_int(2, 10);

            Album::factory()->count($numAlbums)->for($artist)->create()->each(function($album) use ($artist){
                $numMusic = random_int(8, 20);

                Music::factory()->count($numMusic)->for($artist)->for($album)->create();
            });
        });


    }
}

