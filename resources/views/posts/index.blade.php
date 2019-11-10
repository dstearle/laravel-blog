@extends('layouts.app')

@section('content')

    {{-- Title --}}
    <h1>Posts</h1>

    {{-- Checks if there are any posts to be shown --}}
    @if(count($posts) > 0)

        {{-- Foreach loop for posts --}}
        @foreach($posts as $post)

            <div class="card my-2">

                <div class="card-body">

                    {{-- Post Title --}}
                    <h3>

                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>

                    </h3>

                    {{-- Timestamp & Author --}}
                    <small>Written on {{ $post->created_at }} by {{ $post->user->name}}</small>

                </div>

            </div>

        @endforeach

        {{-- Pagination Links --}}
        {{ $posts->links() }}

    {{-- If no posts are found inform user --}}
    @else

        <p>No Posts Found</p>

    @endif

@endsection