@extends('layout.app')
@section('content')
<h1>mio singolo elemento</h1>
<div class="card" style="width: 18rem;">
    <img src="{{ $singleComic['thumb'] }}" alt="...">
    <div class="card-body">
        <p class="card-title">{{$singleComic['title']}}</p>
        <p class="card-text">{{$singleComic['series']}}</p>
        <p class="card-text">{{$singleComic['price']}}</p>


    </div>
</div>
@endsection