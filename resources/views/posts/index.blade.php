@extends('layouts.app')

@section('content')

    {{-- Title --}}
    <h1>Posts</h1>

    {{-- Checks if there are any posts to be shown --}}
    @if(count($posts) > 1)

        {{-- Foreach loop for posts --}}
        @foreach($posts as $post)

            <div class="card my-2">

                <div class="card-body">

                    {{-- Post Title --}}
                    <h3>{{ $post->title }}</h3>

                    <small>Written on {{ $post->created_at }}</small>

                </div>

            </div>

        @endforeach

    {{-- If no posts are found inform user --}}
    @else

        <p>No Posts Found</p>

    @endif

@endsection