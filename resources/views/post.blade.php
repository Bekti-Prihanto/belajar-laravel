@extends('layouts.main')

@section('container')
    <h2>{{ $post->title }}</h2>

    <p>By. <a href="/authors/{{  $post->author->username }}">{{ $post->author->name }}</a> Category <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <a href="/posts">Back to posts</a>
@endsection

{{-- Post::create([
    'title' => 'Post Pertama',
    'category_id' => 1,
    'slug' => 'post-pertama',
    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, accusantium?',
    'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores quidem velit dignissimos veritatis vel repudiandae impedit est amet dolor! Ea culpa inventore voluptatem ipsum, esse ab nam perspiciatis veritatis vel, eum eaque quasi doloremque. Natus minus iste enim magni a nam, quas similique hic dicta exercitationem autem ratione, sed suscipit!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus omnis sint quod sit alias voluptatum cupiditate illo debitis sapiente! Optio nesciunt qui, tenetur cumque atque commodi, laudantium accusantium laboriosam veniam amet ab consectetur! Totam inventore reprehenderit neque consectetur eos est magni aspernatur soluta vero. Quos sunt sint laborum ea architecto!</p>'
])

Post::create([
    'title' => 'Post Kedua',
    'category_id' => 2,
    'slug' => 'post-kedua',
    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, accusantium?',
    'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore corrupti, quas vitae expedita excepturi blanditiis eius hic maxime dolores, quo in. Voluptate nostrum obcaecati atque perferendis adipisci inventore tempora quas dolorum, velit, hic fugiat repellendus delectus voluptates modi perspiciatis. Deserunt voluptates neque, repellendus deleniti harum repellat distinctio ullam corporis iste.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus omnis sint quod sit alias voluptatum cupiditate illo debitis sapiente! Optio nesciunt qui, tenetur cumque atque commodi, laudantium accusantium laboriosam veniam amet ab consectetur! Totam inventore reprehenderit neque consectetur eos est magni aspernatur soluta vero. Quos sunt sint laborum ea architecto!</p>'
])

Post::create([
    'title' => 'Post Ketiga',
    'category_id' => 3,
    'slug' => 'post-ketiga',
    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, accusantium?',
    'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore corrupti, quas vitae expedita excepturi blanditiis eius hic maxime dolores, quo in. Voluptate nostrum obcaecati atque perferendis adipisci inventore tempora quas dolorum, velit, hic fugiat repellendus delectus voluptates modi perspiciatis. Deserunt voluptates neque, repellendus deleniti harum repellat distinctio ullam corporis iste.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus omnis sint quod sit alias voluptatum cupiditate illo debitis sapiente! Optio nesciunt qui, tenetur cumque atque commodi, laudantium accusantium laboriosam veniam amet ab consectetur! Totam inventore reprehenderit neque consectetur eos est magni aspernatur soluta vero. Quos sunt sint laborum ea architecto!</p>'
])

Category::create([
    'name' => 'Web Design',
    'slug' => 'web-design'
])

Category::create([
    'name' => 'Personal',
    'slug' => 'personal'
]) --}}