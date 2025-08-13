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
    ['genre' => 'None found'],    ['genre' => 'Hip-Hop'],    ['genre' => 'Pop'],    ['genre' => 'Rock'],    ['genre' => 'Jazz'],    ['genre' => 'Classical'],    ['genre' => 'Country'],    ['genre' => 'Electronic'],
    ['genre' => 'R&B'],    ['genre' => 'Trap'],    ['genre' => 'Blues'],    ['genre' => 'Soul'],    ['genre' => 'Funk'],    ['genre' => 'Folk'],    ['genre' => 'Reggae'],
    ['genre' => 'Ska'],    ['genre' => 'Metal'],    ['genre' => 'Punk'],    ['genre' => 'Gospel'],    ['genre' => 'World'],    ['genre' => 'Latin'],    ['genre' => 'Disco'],
    ['genre' => 'House'],    ['genre' => 'Techno'],    ['genre' => 'Trance'],    ['genre' => 'Dubstep'],    ['genre' => 'Drum and Bass'],    ['genre' => 'Ambient'],    ['genre' => 'Opera'],
    ['genre' => 'Soundtrack'],    ['genre' => 'Industrial'],    ['genre' => 'Experimental'],    ['genre' => 'Grunge'],    ['genre' => 'Shoegaze'],    ['genre' => 'Alternative'],
    ['genre' => 'Indie'],    ['genre' => 'Lo-fi'],    ['genre' => 'Chillout'],    ['genre' => 'Bluegrass'],    ['genre' => 'Afrobeat'],    ['genre' => 'K-Pop'],    ['genre' => 'J-Pop'],
    ['genre' => 'Flamenco'],    ['genre' => 'Samba'],    ['genre' => 'Bossa Nova'],    ['genre' => 'Tango'],    ['genre' => 'Cumbia'],    ['genre' => 'Zouk'],    ['genre' => 'Reggaeton'],
    ['genre' => 'Dancehall'],    ['genre' => 'Drill'],    ['genre' => 'Phonk'],    ['genre' => 'Soca'],    ['genre' => 'Highlife'],    ['genre' => 'Chiptune'],    ['genre' => 'Synthwave'],
    ['genre' => 'Post-Rock'],    ['genre' => 'Post-Punk'],    ['genre' => 'New Wave'],    ['genre' => 'Hardcore'],    ['genre' => 'Emo'],    ['genre' => 'Math Rock'],    ['genre' => 'Progressive Rock'],
    ['genre' => 'Psychedelic Rock'],    ['genre' => 'Baroque'],    ['genre' => 'Minimalism'],    ['genre' => 'Contemporary Classical'],
];



        foreach($genres as $genre){
            Genre::create($genre);
        }

        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@example.com',
            'password' => 'Test123!'
        ]);

        User::factory()->create([
            'name' => 'Sem',
            'email' => 'test4@example.com',
            'password' => 'Test123!'
        ]);

        User::factory()->create([
            'name' => 'Megan',
            'email' => 'test1@example.com',
            'password' => 'Test123!'
        ]);

         User::factory()->create([
            'name' => 'Tim',
            'email' => 'test2@example.com',
            'password' => 'Test123!'
        ]);

        User::factory()->create([
            'name' => 'Henk',
            'email' => 'test3@example.com',
            'password' => 'Test123!'
        ]);

        Artist::factory(1)->create()->each(function(Artist $artist){
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
                    ->state(function (){
                                return [
                                    'user_id' => User::inRandomOrder()->value('id')
                                ];
                            })
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
                            ->state(function (){
                                return [
                                    'user_id' => User::inRandomOrder()->value('id')
                                ];
                            })
                            ->create(
                                [
                                    'reviewable_id' => $music->id,
                                    'reviewable_type' => Music::class
                                ]
                                );
                            });
                });
        });


    }
}

