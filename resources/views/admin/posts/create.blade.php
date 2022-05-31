@extends('layouts.dashboard')
@section('content')
    <form action="{{ route('admin.posts.store') }}" method="post">
        @csrf
        Title<input name="title" type="text">
        Content<input name="description" type="text">
        <button type="submit">Submit</button>
    </form>
@endsection
