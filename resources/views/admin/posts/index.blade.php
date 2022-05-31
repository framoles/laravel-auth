@extends('layouts.dashboard')
@section('content')
    <h1>Tutti i post</h1>
    @foreach ($dbPost as $post)
        {{ $post->title }}
        {{ $post->content }}
    @endforeach
    <br><a href="{{ route('admin.posts.create') }}">Nuovo post</a>
@endsection
