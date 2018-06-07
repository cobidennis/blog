@extends('layouts.main')
@section('content')
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} ({{ $post->created_at->diffForHumans() }})<a href="#"> Chris</a></p>
    <p> {{ $post->body }} </p>
    <hr>
    <div class="comments">
        <ul class="list-group">
            @foreach ($post->comments as $comment)
                <li class="list-group-item">{{ $comment->body }}<i class="float-right">{{ $comment->created_at->diffForHumans() }}</i></li>
            @endforeach
        </ul>
        
    </div>
    <hr>
    <!--Add Comment -->
    <div class="card">
        <div class="card-block">
            <form action="/posts/{{ $post->id }}/comments" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" id="body" class="form-control" placeholder="Drop comments here" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Add Comment</button>
                </div>
                @include('forms.errors')
            </form>
        </div>
    </div>
@endsection