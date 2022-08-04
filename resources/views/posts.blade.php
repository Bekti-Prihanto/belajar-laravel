@extends('layouts.main')

@section('container')
    {{-- @dd($posts) --}}
    <h1 class="text-center">{{ $title }}</h1>
    @foreach ($posts as $post)
        <article class="mb-4">
            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>By. <a href="/authors/{{  $post->author->username }}">{{ $post->author->name }}</a> in Category <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection