@extends('layouts.dashboard')
@section('content')
    <h1>Tutti i post</h1>
    @foreach ($dbPost as $post)
        {{ $post->title }}
        {{ $post->content }}
        {{ $post->slug }}
        <a href="{{ route('admin.posts.show', $post->id) }}">Visualizza</a>
    @endforeach
    <br><a href="{{ route('admin.posts.create') }}">Nuovo post</a>
@endsection
