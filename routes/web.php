<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/posts', function () {
    return view('blog', ['title' => 'Discover Our Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'cara-marinasi-daging-ayam',
            'title' => 'Cara Marinasi Daging Ayam',
            'author' => 'Bregsi AJ',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, beatae pariatur molestiae sunt nulla facilis modi reprehenderit minus enim et, quibusdam consequuntur ea nemo est! Quod non qui, atque mollitia dolore natus, voluptas fuga, illo eius consequuntur explicabo quasi est.'
        ],
        [
            'id' => 2,
            'slug' => 'tips-menggoreng-ayam-kripsi-kriuk',
            'title' => 'Tips Menggoreng Ayam Krispi Kriuk',
            'author' => 'Bregsi AJ',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptate ratione utem at. Sed amet eos ut beatae aspernatur sunt architecto consectetur deleniti laudantium fugit placeat minima numquam maxime nulla distinctio obcaecati, nobis, impedit corrupti maiores odio cumque! Expedita, veritatis!.'
        ],
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'cara-marinasi-daging-ayam',
            'title' => 'Cara Marinasi Daging Ayam',
            'author' => 'Bregsi AJ',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, beatae pariatur molestiae sunt nulla facilis modi reprehenderit minus enim et, quibusdam consequuntur ea nemo est! Quod non qui, atque mollitia dolore natus, voluptas fuga, illo eius consequuntur explicabo quasi est.'
        ],
        [
            'id' => 2,
            'slug' => 'tips-menggoreng-ayam-kripsi-kriuk',
            'title' => 'Tips Menggoreng Ayam Krispi Kriuk',
            'author' => 'Bregsi AJ',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptate ratione utem at. Sed amet eos ut beatae aspernatur sunt architecto consectetur deleniti laudantium fugit placeat minima numquam maxime nulla distinctio obcaecati, nobis, impedit corrupti maiores odio cumque! Expedita, veritatis!.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
