@extends('layouts/app', ['siteTitle' => $travel->content])

@section('content')
    <div class="container" style="font-family:Times; color:rgba(10,42,65.9);">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4 lead">{{ $travel->content }}</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-11" style="color:rgb(18,67,93);">
                <h2>Travel day: {{ $travel->startDate }}</h2>
                <h2>Max number of people: {{ $travel->maxNum }}</h2>
                <h2>Current headcount: {{ $user }}</h2>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-8">
                <h3>
                    Description:
                </h3>
                <p>{{ $travel->description }}</p>
            </div>
        </div>
    </div>

@endsection