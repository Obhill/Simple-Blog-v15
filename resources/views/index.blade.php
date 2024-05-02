<!-- resources/views/posts/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        @if(auth()->check() && auth()->user()->isAdmin())
            <div class="mb-3">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">Add New Post</a>
            </div>
        @endif

        <h1>Blog Posts</h1>
        @foreach ($posts as $post)
            <div class="post-item">
                <h2>{{ $post->title }}</h2>
                <p>{{ Str::limit($post->content, 150) }}</p>
                <a href="{{ route('posts.show', $post) }}" class="btn btn-info">Read More</a>
            </div>
        @endforeach

        <!-- Pagination links -->
        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
@endsection

