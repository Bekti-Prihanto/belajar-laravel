<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Bekti Prihanto',
        'email' => 'bektiprihanto2001@gmail.com',
        'image' => 'profile.jpeg'
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            'title' => 'First Post',
            'slug' => 'first-post',
            'author' => 'Bekti Prihanto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Maiores rerum, deserunt consequuntur consequatur sint minima eos 
            debitis voluptatem eaque amet veniam odio cum, 
            hic possimus vero quasi voluptate! Iure, quis.'
        ],
        [
            'title' => 'Second Post',
            'slug' => 'second-post',
            'author' => 'Ivana Intan Paramita',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Maiores rerum, deserunt consequuntur consequatur sint minima eos 
            debitis voluptatem eaque amet veniam odio cum, 
            hic possimus vero quasi voluptate! Iure, quis.'
        ],
    ];
    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});

Route::get('/post/{slug}', function () {
    $blog_posts = [
        [
            'title' => 'First Post',
            'slug' => 'first-post',
            'author' => 'Bekti Prihanto',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Maiores rerum, deserunt consequuntur consequatur sint minima eos 
            debitis voluptatem eaque amet veniam odio cum, 
            hic possimus vero quasi voluptate! Iure, quis.'
        ],
        [
            'title' => 'Second Post',
            'slug' => 'second-post',
            'author' => 'Ivana Intan Paramita',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Maiores rerum, deserunt consequuntur consequatur sint minima eos 
            debitis voluptatem eaque amet veniam odio cum, 
            hic possimus vero quasi voluptate! Iure, quis.'
        ],
    ];

    $post = collect($blog_posts)->where('slug', request('slug'))->first();

    return view('post', [
        'title' => 'Posts',
        'post' => $post
    ]);
});