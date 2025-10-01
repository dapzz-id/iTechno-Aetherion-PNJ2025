<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/login', function () {
    return view('layouts.login');
});

Route::get('/add-karya', function () {
    return view('layouts.add-karya');
});

Route::get('/detail-karya', function () {
    return view('layouts.detail-karya');
});

Route::get('/{page}', function ($page) {
    if ($page === 'search' || $page === 'profile' || $page === 'gallery') {
        $dataPage = [
            'searchResults' => [
                [
                    'username' => 'Kadavi',
                    'likes' => '1.4k',
                    'image' => asset('search-image1.webp')
                ],
                [
                    'username' => 'Ataya',
                    'likes' => '1.9k',
                    'image' => asset('search-image2.webp')
                ],
                [
                    'username' => 'Hanifah',
                    'likes' => '700',
                    'image' => asset('search-image3.webp')
                ],
            ]
        ];
    }

    if ($page === 'leaderboard') {
        $top3 = [
            [
                'username' => 'Kadavi',
                'likes' => 1400,
                'posts' => 150,
                'profile_picture' => 'https://i.pravatar.cc/40?img=7',
            ],
            [
                'username' => 'Ataya',
                'likes' => 1900,
                'posts' => 200,
                'profile_picture' => 'https://i.pravatar.cc/40?img=4',
            ],
            [
                'username' => 'Hanifah',
                'likes' => 900,
                'posts' => 100,
                'profile_picture' => 'https://i.pravatar.cc/40?img=5',
            ],
        ];

        $others = [
            ['rank' => 4, 'username' => 'Raditya', 'likes' => 700, 'posts' => 95],
            ['rank' => 5, 'username' => 'Nafis. R', 'likes' => 600, 'posts' => 90],
            ['rank' => 6, 'username' => 'R. Alvino', 'likes' => 500, 'posts' => 85],
            ['rank' => 7, 'username' => 'Raditya', 'likes' => 400, 'posts' => 80],
            ['rank' => 8, 'username' => 'Nafis. R', 'likes' => 300, 'posts' => 75],
            ['rank' => 9, 'username' => 'R. Alvino', 'likes' => 200, 'posts' => 70],
        ];
    }

    return view('layouts.dashboard', $dataPage ?? [])
        ->with('page', $page)
        ->with('top3', $top3 ?? [])
        ->with('others', $others ?? []);

})->where('page', 'dashboard|search|leaderboard|profile|gallery');