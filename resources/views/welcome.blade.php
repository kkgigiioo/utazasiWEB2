@extends('layout', ['siteTitle' => 'Home'])

@section('content')
    <div class="container">
        <div class="row" style="margin-top:20%;">
            <div class="col-md-4">
                <h1 class="display-4">Helló utazó</h1>
            </div>
        </div>
        <div class="row">
            @foreach($travel as $travels)
            <div class="col-4 list-group">
                            <a href="/travels/{{$travels->id}}" class="list-group-item list-group-item-action list-group-item-dark">{{ $travels->content }}</a>
            </div>
            @endforeach
        </div>
    </div>

@endsection