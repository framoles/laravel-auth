@extends('layouts.dashboard')
@section('content')
    <h1>Tutti i post</h1>
    titolo:{{ $post->title }}
    contenuto:{{ $post->content }}
    slug:{{ $post->slug }}
    <br><a href="{{ route('admin.posts.edit', $post->id) }}">Aggiorna</a><br>
    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form><br>
    <br><a href="{{ route('admin.posts.index') }}">All Posts</a>
@endsection
