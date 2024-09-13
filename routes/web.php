<?php

use App\Models\post;
use App\Models\User;
use App\Models\Category;
use illuminate\Support\Arr;
use illuminate\support\Facades\Route;





Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about',['name' => 'Bima Dharma Yahya','title' => 'about']);
});

Route::get('/posts', function () {
    // $posts = post::with(['author', 'category'])->latest()->get();


    return view('posts', ['title' => 'Blog', 'posts' => post::filter(request(['search', 'category', 'author']))->latest()->paginate(10)->withQueryString()]);
});


Route::get('/posts/{post:slug}', function(post $post) {
    


    return view('post', ['title' => 'Single post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function(User $user) {
    // $posts = $user->posts->load('category', 'author');
    
    return view('posts', ['title' => count($user->posts) . ' Articles by '. $user->name, 'posts' => $user->posts]);
});
Route::get('/categories/{category:slug}', function(Category $category) {
    // $posts = $category->posts->load('category', 'author');
    
    return view('posts', ['title' => 'Articles in: '. $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});

