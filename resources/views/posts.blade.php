@extends('layouts.main')
@section('container')
<h1 class="mb-3">{{ $title }}</h1>
<br>
@foreach ($posts as $post)
    <article class="mb-5">
    <h3>
        <a href="{{ route('posts.show',['post' => $post->slug]) }}" class="text-decoration-none">{{ $post->title }}</a>
    </h3>
    <h10>
        By : <a href="/authors/{{ $post->user->username }}" class="text-decoration-none" > {{ $post->user->name }} </a>
    </h10>
        <br>
    <h10>
        Kategori : <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
    </h10>
    <br>
    {{ $post->excerpt }}
    <br>
    <a href="{{ route('posts.show',['post' => $post->slug]) }}" class="text-decoration-none">Read more ... </a>
</article>
@endforeach
@endsection

