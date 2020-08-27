@extends('layout')

@section('content')
    @forelse ($posts as $post)
        <p>
            <h3><a href="{{ route('posts.show', ['post' => $post->id ]) }}">{{ $post->title }}</a></h3>
            <a href="{{ route('posts.edit', ['post' => $post->id]) }}">Edit</a>
            <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="delete">
            </form>
        </p>
    @empty 
        <p>No blog posts yet</p>
    @endforelse
@endsection('content')