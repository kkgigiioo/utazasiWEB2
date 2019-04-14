@extends('layouts/app', ['siteTitle' => 'Home'])

@section('content')
    <div class="container">
        <div class="row">
            @foreach($travel as $travels)
                <div class="card text-white bg-dark m-2">
                    <div class="card-header">{{ $travels->country }}, {{ $travels->city }}</div>
                    <div class="card-body">
                        <h5 class="card-title">Start date: {{ $travels->startDate }}</h5>
                        <p class="card-text">{{ $travels->content }}</p>
                        <a href=/travels/{{$travels->id}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection