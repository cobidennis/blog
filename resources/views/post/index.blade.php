
@extends('layouts.main')

@section('content')
        
    <h3 class="pb-3 mb-4 font-italic border-bottom">
        Latest Blog
    </h3>
    @foreach ($posts as $post)
        <!-- /.blog-post -->
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>
        {{ $post->body }}
    </div>
    <!-- /.blog-post -->
    @endforeach
    
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav> 
@endsection
