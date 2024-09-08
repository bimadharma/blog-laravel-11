<?php

use illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about',['name' => 'Bima Dharma Yahya','title' => 'about']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
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
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
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

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});

