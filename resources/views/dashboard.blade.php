@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                {{--  --}}
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- Create Posts Link --}}
                    <a href="/posts/create" class="btn btn-success mb-3">Create Post</a>

                    {{-- Table Title --}}
                    <h3>Your Blog Posts</h3>

                    {{-- Checks For Posts --}}
                    @if(count($posts) > 0)

                        {{-- User's Posts Table --}}
                        <table class="table table-striped">

                            {{-- Table Headers --}}
                            <tr>

                                <th>Title</th>

                                <th></th>

                                <th></th>

                            </tr>

                            {{-- Foreach Loop --}}
                            @foreach($posts as $post)

                            <tr>

                                {{-- Post Title --}}
                                <td>{{ $post->title }}</td>

                                {{-- Edit Post --}}
                                <td>
                                    
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
                                
                                </td>

                                {{-- Delete Post --}}
                                <td>

                                    {{-- Delete Button --}}
                                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}

                                        {{ Form::hidden('_method', 'DELETE') }}

                                        {{ Form::submit('Delete', ['class' => 'btn btn-lg btn-danger ml-1']) }}

                                    {!! Form::close() !!}

                                </td>

                            </tr>

                            @endforeach

                        </table>

                    {{-- Else --}}
                    @else

                        <p>You have no posts</p>
                        
                    @endif

                </div>

            </div>
        </div>

    </div>

</div>

@endsection
