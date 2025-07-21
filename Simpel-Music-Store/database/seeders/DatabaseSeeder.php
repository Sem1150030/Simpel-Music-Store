<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use App\Models\Music;
use App\Models\Review;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $genres = [
            ['genre' => 'Hip-Hop',],
            ['genre' => 'Pop',],
            ['genre' => 'Rock',],
            ['genre' => 'Jazz',],
            ['genre' => 'Classical',],
            ['genre' => 'Country',],
            ['genre' => 'Electronic',],
            ['genre' => 'R&B',],
        ];


        foreach($genres as $genre){
            Genre::create($genre);
        }

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'Test123!'
        ]);
        Artist::factory(30)->create()->each(function(Artist $artist){
            $numAlbums = random_int(2, 5);
            Album::factory()
                ->count($numAlbums)
                ->state(function (){
                        return [
                            'genre_id' => Genre::inRandomOrder()->value('id')
                        ];
                    })
                ->for($artist)
                ->create()
                ->each(function($album) use ($artist){
                    $numMusic = random_int(4, 10);
                    $numReviews = random_int(2, 10);
                    Review::factory()
                    ->count($numReviews)
                    ->create(
                        [
                            'reviewable_id' => $album->id,
                            'reviewable_type' => Album::class
                        ]
                        );

                    Music::factory()
                        ->count($numMusic)
                        ->state(function () use ($album) {
                            return [
                                'genre_id' => $album->genre_id,
                            ];
                        })
                        ->for($artist)
                        ->for($album)
                        ->create()
                        ->each(function($music){
                            $numReviews = random_int(2, 12);
                            Review::factory()
                            ->count($numReviews)
                            ->create(
                                [
                                    'reviewable_id' => $music->id,
                                    'reviewable_type' => Album::class
                                ]
                                );
                            });
                });
        });


    }
}

