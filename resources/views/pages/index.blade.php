@extends('layout.app')

@section('content')
<div class="background">
    <div class="container gap-3 py-5">
        <a href="#" class="btn  button p-2  px-4">current series</a>

        @foreach( $varComics as $elem)
        <a href="/comics/{{$elem['id']}}">
            <div class="card" style="width: 18rem;">
                <img src="{{ $elem['thumb'] }}" alt="...">
                <div class="card-body">
                    <p class="card-text">{{ $elem['title'] }}</p>
                    <p class="card-text">{{ $elem['series'] }}</p>

                </div>
                <a href="{{ route('comics.edit',$elem )}}" class="btn btn-warning">edit</a>

                <form action="{{ route('comics.destroy', $elem) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button onclick="return deleteElem()" type="submit" class="btn btn-danger w-100">elimina</button>
                </form>
            </div>
        </a>
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
@section('script')

function deleteElem() {
return confirm( 'Sei sicuro di voler eleminare elemnto?');
}

@endsection