<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    //
    // create function can only insert one data at a time
    function create()
    {

        DB::table('movies')->insert([
            [
                'movie_name' => 'Inception',
                'rating' => 9,
                'description' => 'A thief who steals corporate secrets through dream-sharing technology.',
                'release_data' => '2010-07-16',
                'category' => 'Sci-Fi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'movie_name' => 'The Dark Knight',
                'rating' => 10,
                'description' => 'Batman faces the Joker in Gotham City.',
                'release_data' => '2008-07-18',
                'category' => 'Action',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'movie_name' => 'Interstellar',
                'rating' => 9,
                'description' => 'A team travels through a wormhole in search of a new home for humanity.',
                'release_data' => '2014-11-07',
                'category' => 'Sci-Fi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'movie_name' => 'Titanic',
                'rating' => 8,
                'description' => 'A romance unfolds aboard the ill-fated RMS Titanic.',
                'release_data' => '1997-12-19',
                'category' => 'Romance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'movie_name' => 'Avengers: Endgame',
                'rating' => 9,
                'description' => 'The Avengers assemble for one final battle against Thanos.',
                'release_data' => '2019-04-26',
                'category' => 'Superhero',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        return "Movies inserted successfully!";
    }

    function readAll()
    {
        return DB::table('movies')->get();
    }

    function updateData()
    {
        return DB::table('movies')
            ->where('id', 3)
            ->update(['movie_name' => 'Time Travel Logs']);
    }

    function deleteTable()
    {
        DB::table('movies')->where('id', 3)->delete();

        return 'Table deleted';
    }
}
