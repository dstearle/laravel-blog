@extends('layouts.app')

@section('content')

    <div class="jumbotron text-center">

        {{-- Title --}}
        <h1>Welcome To Laravel!</h1>

        <p>This is a cool blog made by me!</p>

        <p>

            {{-- Login --}}
            <a href="/login" role="button" class="btn btn-secondary btn-lg">Login</a>

            {{-- Register --}}
            <a href="/register" role="button" class="btn btn-success btn-lg">Register</a>

        </p>

    </div>

@endsection