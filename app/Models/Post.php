<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
        ];
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
