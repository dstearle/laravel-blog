@extends('layouts.app')

@section('content')

    <div class="card">

        <div class="card-body">

            {{-- Title --}}
            <h1>{{ $post->title }}</h1>

            {{-- Body --}}
            <div>{!! $post->body !!}</div>

            <hr>

            <div class="row">

                {{-- Create At --}}
                <div class="col-6 d-flex justify-content-start">

                    <small>Written on {{ $post->created_at }}</small>

                </div>

                {{-- Back Button --}}
                <div class="col-6 d-flex justify-content-end">

                    <a href="/posts" class="btn btn-lg btn-secondary">Go Back</a>

                </div>

            </div>

        </div>

    </div>

@endsection