@extends('layouts.dashboard')
@section('content')
    <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
        @csrf

        @method('PUT')

        Title<input name="title" type="text" value="{{ $post->title }}">
        Description<input name="content" type="text" value="{{ $post->content }}">

        <button type="submit">Submit</button>
    </form>
@endsection
