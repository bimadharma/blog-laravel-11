<?php  

namespace App\Models;

use illuminate\Support\Arr;

class post 
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'Judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Bima Dharma Yahya',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo enim numquam dolores eos quam quo aliquid! Quo, odio consequuntur dolores veritatis voluptatum at temporibus similique, magnam architecto, doloribus suscipit repellendus?'
            ],
            [
                'id' => 2,
                'slug' => 'Judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Bima Dharma Yahya',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas optio a ratione quidem suscipit, officiis distinctio blanditiis maiores nobis dolorem quos voluptate cupiditate pariatur tempore in, odit veritatis alias doloremque?'
            ],
        ];
    }
    
    public static function find($slug): array
{

    $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

    if (! $post) {
        abort(404);
    }
    return $post;
}
}


?>