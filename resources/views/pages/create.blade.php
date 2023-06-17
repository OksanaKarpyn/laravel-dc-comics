@extends('layout.app')
@section('content')
<div class="container my-5">
    <h2>Form create comics</h2>
    <form action="{{ route('comics.store' )}}" method="POST">
        <!-- questo e un token  informativa che larav converte in input  che trassmette inf univoca-->
        @csrf

        <div class="form-group my-3">
            <label for="comics-title" class="form-label">comics-title</label>
            <input type="text" id="comics-title" class="form-control @error('title')  is-invalid @enderror"
                placeholder="inserisci titolo" name="title">
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group my-3">
            <label for="comics-description" class="form-label">comics-description</label>
            <textarea class="form-control" placeholder="Leave a comment here" id="comics-description"
                name="description"></textarea>
        </div>
        <div class="form-group my-3">
            <label for="comics-thumb" class="form-label">comics-thumb</label>
            <input type="text" id="comics-thumb" class="form-control" placeholder="inserisci ulr.img" name="thumb">
        </div>
        <div class="form-group my-3">
            <label for="comics-price" class="form-label">comics-price</label>
            <input type="text" id="comics-price" class="form-control" placeholder="inserisci prezzo" name="price">
        </div>
        <div class="form-group my-3">
            <label for="comics-series" class="form-label">comics-series</label>
            <input type="text" id="comics-series" class="form-control" placeholder="inserisci serie" name="series">
        </div>
        <div class="form-group my-3">
            <label for="comics-sale-date" class="form-label">comics-sale-date</label>
            <input type="date" id="comics-sale-date" class="form-control" placeholder="inserisci titolo"
                name="sale_date">
        </div>
        <div class="form-group my-3">
            <label for="comics-type" class="form-label">comics-type</label>
            <input type="text" id="comics-type" class="form-control" placeholder="inserisci type" name="type">
        </div>
        <button type="submit" class="btn btn-primary my-2">Invia Form</button>
    </form>
</div>
@endsection