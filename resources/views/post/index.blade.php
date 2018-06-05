
@extends('components.layout')

@section('content')
    <u>
        @foreach ($posts as $post)
        <a href="/posts/{{ $post->id}}"><li>{{ $post->title }}</li></a>
        @endforeach
    </u>
    
@endsection
