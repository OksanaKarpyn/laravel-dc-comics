@extends('layout.app')

@section('content')
<div class="background">
    <div class="container gap-3 py-5">
        <a href="#" class="btn  button p-2  px-4">current series</a>

        @foreach( $varComics as $elem)
        <div class="card" style="width: 18rem;">
            <img src="{{ $elem['thumb'] }}" alt="...">
            <div class="card-body">
                <p class="card-text">hello index</p>
                <p class="card-text">hello</p>

            </div>
        </div>
        @endforeach

        <a href="#" class="load p-2  px-5">load more</a>
    </div>

    <div class="section-icon bg-primary">
        <div class="container">
            <div class="rows">
                <div class="icon-item">
                    <img class="icon-img" src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"
                        alt="">
                    <p class="text-white p-icon">DIGITAL COMICS</p>
                </div>
                <div class="icon-item">
                    <img class="icon-img" src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"
                        alt="">
                    <p class="text-white p-icon">DIGITAL COMICS</p>
                </div>
                <div class="icon-item">
                    <img class="icon-img" src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"
                        alt="">
                    <p class="text-white p-icon">DIGITAL COMICS</p>
                </div>
                <div class="icon-item">
                    <img class="icon-img" src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"
                        alt="">
                    <p class="text-white p-icon">DIGITAL COMICS</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection