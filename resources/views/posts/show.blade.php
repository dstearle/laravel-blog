@extends('layouts.app')

@section('content')

    <div class="card">

        <div class="card-body">

            {{-- Title --}}
            <h1>{{ $post->title }}</h1>

            {{-- Body --}}
            <div>{!! $post->body !!}</div>

            {{-- Created At --}}
            <div>

                <small>Written on {{ $post->created_at }}</small>

            </div>

            <hr>

            <div class="row">

                <div class="col-6 d-flex justify-content-start">

                    {{-- Edit Button --}}
                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-lg btn-success">Edit</a>

                    {{-- Delete Button --}}
                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}

                        {{ Form::hidden('_method', 'DELETE') }}

                        {{ Form::submit('Delete', ['class' => 'btn btn-lg btn-danger ml-1']) }}

                    {!! Form::close() !!}

                </div>

                {{-- Back Button --}}
                <div class="col-6 d-flex justify-content-end">

                    <a href="/posts" class="btn btn-lg btn-secondary">Go Back</a>

                </div>

            </div>

        </div>

    </div>

@endsection