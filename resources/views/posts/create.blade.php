@extends('layouts.app')

@section('content')

    {{-- Title --}}
    <h1>Create Post</h1>

    {{-- Form --}}
    {{-- Note: This form comes from the LaravelCollective composer package --}}
    {{ Form::open(['url' => 'foo/bar']) }}
	//
    {{ Form::close() }}

@endsection