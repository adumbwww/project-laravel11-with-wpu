<?php

use App\Models\Blog;
use App\Models\Category;
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
    $blogs = Blog::latest()->get();
    return view ('blogs', ['title' => 'Blog', 'blogs' => $blogs]);
});

Route::get('/blogs/{blog:slug}', function(Blog $blog) {
        return view('blog', ['title' => 'Single Blog', 'blog' => $blog]);
});

Route::get('/authors/{user:username}', function(User $user) {
    return view('blogs', ['title' => count($user->blogs) . ' Articles By' . $user->name, 'blogs' => $user->blogs]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('blogs', ['title' => 'Articles in: ' . $category->name, 'blogs' => $category->blogs]);
});

Route::get('/contact', function () {
    return view ('contact', ['title' => 'Contact']);
});
