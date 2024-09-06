<?php

use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view ('about', ['title' => 'About']);
});


Route::get('/blogs', function () {
    return view ('blogs', ['title' => 'Blog', 'blogs' => Blog::all()]);
});

Route::get('/blogs/{blog:slug}', function(Blog $blog) {
        return view('blog', ['title' => 'Single Blog', 'blog' => $blog]);
});

Route::get('/authors/{user}', function(User $user) {
    return view('blogs', ['title' => 'Articles By' . $user->name, 'blogs' => $user->blogs]);
});

Route::get('/contact', function () {
    return view ('contact', ['title' => 'Contact']);
});
