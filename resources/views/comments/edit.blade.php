@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Comment</h2>

        <form action="{{ route('comments.update', $comment->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" rows="4" class="form-control">{{ old('comment', $comment->comment) }}</textarea>
                @error('comment')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Comment</button>
            <a href="{{ route('posts.show', $comment->post_id) }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
