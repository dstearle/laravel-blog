@extends('layouts.app')

@section('content')

    <h1>{{ $title }}</h1>
    
    {{-- Checks to see if there is at least one service available --}}
    @if(count($services) > 0)

        <ul class="list-group">

            {{-- Foreach loop that grabs each item in the array --}}
            @foreach($services as $service)

                <li class="list-group-item">{{ $service }}</li>

            @endforeach

        </ul>

    @endif

@endsection