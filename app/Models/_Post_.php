<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [
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
    
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = self::all();
        return $posts->firstWhere('slug', $slug);

    }
}
