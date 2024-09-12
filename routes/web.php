<?php

use App\Models\post;
use App\Models\User;
use illuminate\Support\Arr;
use illuminate\support\Facades\Route;





Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about',['name' => 'Bima Dharma Yahya','title' => 'about']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => post::all()]);
});


Route::get('/posts/{post:slug}', function(post $post) {
    


    return view('post', ['title' => 'Single post', 'post' => $post]);
});

Route::get('/authors/{user}', function(User $user) {
    
    return view('posts', ['title' => 'Articles by '. $user->name, 'posts' => $user->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});

