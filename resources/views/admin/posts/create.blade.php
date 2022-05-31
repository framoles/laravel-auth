@extends('layouts.dashboard')
@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('admin.posts.store') }}" method="post">
        @csrf
        Title<input name="title" type="text">
        Content<input name="content" type="text">
        <button type="submit">Submit</button>
    </form>
@endsection
