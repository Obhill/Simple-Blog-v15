@extends('layouts.app')

@section('content')
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="form-group">
        <label for="content">Content:</label>
        <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection