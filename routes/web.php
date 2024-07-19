<?php

use App\Models\Blog;
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

Route::get('/blogs/{slug}', function($slug) {
        $blog = Blog::find($slug);
        return view('blog', ['title' => 'Single Blog', 'blog' => $blog]);
});

Route::get('/contact', function () {
    return view ('contact', ['title' => 'Contact']);
});
