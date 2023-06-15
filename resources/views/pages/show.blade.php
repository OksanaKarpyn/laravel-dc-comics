@extends('layout.app')
@section('content')
<h1 class="container text-center my-5">mio singolo elemento</h1>
<div class="container d-flex">
    <div class="card w-50" style="width: 18rem;">
        <img src="{{ $singleComic['thumb'] }}" alt="...">
        <div class="card-body">
            <h2 class="card-title">{{$singleComic['title']}}</h2>
            <p class="card-text">{{$singleComic['series']}}</p>
            <p class="card-text">{{$singleComic['price']}}</p>


        </div>
    </div>
    <div class="card-body w-50">
        <p class="card-text">{{$singleComic['description']}}</p>
    </div>
</div>
@endsection