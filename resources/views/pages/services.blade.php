@extends('layouts.app')

@section('content')
    <h1>flapp</h1>
    <h2>{{$title}}</h2>
    <p>services</p>
    @if(count($services) > 0)
        <ul>
        @foreach($services as $service)
            <li>{{$service}}</li>
        @endforeach 
        </ul>
    @endif
@endsection
