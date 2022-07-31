@extends('layouts.main')

@section('container')
    <h2>{{ $post->title }}</h2>
    <h5>{{ $post->author }}</h5>
    {!! $post->body !!}

    <a href="/posts">Back to posts</a>
@endsection

{{-- Post::create([
    'title' => 'Post Pertama',
    'slug' => 'post-pertama',
    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, accusantium?',
    'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore corrupti, quas vitae expedita excepturi blanditiis eius hic maxime dolores, quo in. Voluptate nostrum obcaecati atque perferendis adipisci inventore tempora quas dolorum, velit, hic fugiat repellendus delectus voluptates modi perspiciatis. Deserunt voluptates neque, repellendus deleniti harum repellat distinctio ullam corporis iste.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus omnis sint quod sit alias voluptatum cupiditate illo debitis sapiente! Optio nesciunt qui, tenetur cumque atque commodi, laudantium accusantium laboriosam veniam amet ab consectetur! Totam inventore reprehenderit neque consectetur eos est magni aspernatur soluta vero. Quos sunt sint laborum ea architecto!</p>'
])

Post::create([
    'title' => 'Post Kedua',
    'slug' => 'post-kedua',
    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, accusantium?',
    'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore corrupti, quas vitae expedita excepturi blanditiis eius hic maxime dolores, quo in. Voluptate nostrum obcaecati atque perferendis adipisci inventore tempora quas dolorum, velit, hic fugiat repellendus delectus voluptates modi perspiciatis. Deserunt voluptates neque, repellendus deleniti harum repellat distinctio ullam corporis iste.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus omnis sint quod sit alias voluptatum cupiditate illo debitis sapiente! Optio nesciunt qui, tenetur cumque atque commodi, laudantium accusantium laboriosam veniam amet ab consectetur! Totam inventore reprehenderit neque consectetur eos est magni aspernatur soluta vero. Quos sunt sint laborum ea architecto!</p>'
])

Post::create([
    'title' => 'Post Ketiga',
    'slug' => 'post-ketiga',
    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, accusantium?',
    'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore corrupti, quas vitae expedita excepturi blanditiis eius hic maxime dolores, quo in. Voluptate nostrum obcaecati atque perferendis adipisci inventore tempora quas dolorum, velit, hic fugiat repellendus delectus voluptates modi perspiciatis. Deserunt voluptates neque, repellendus deleniti harum repellat distinctio ullam corporis iste.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus omnis sint quod sit alias voluptatum cupiditate illo debitis sapiente! Optio nesciunt qui, tenetur cumque atque commodi, laudantium accusantium laboriosam veniam amet ab consectetur! Totam inventore reprehenderit neque consectetur eos est magni aspernatur soluta vero. Quos sunt sint laborum ea architecto!</p>'
]) --}}