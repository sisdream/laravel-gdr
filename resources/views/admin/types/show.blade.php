@extends('layouts.app')

@section('title', 'Dettaglio')

@section('content')
    <section>
        <div class="container py-4">

            <div class="card">

                <h2 class="card-header text-center text-uppercase">{{$type['name']}}</h2>

                <div class=" card-body d-flex my-3 gap-5">
                    <div class="card-img">
                        <img src="{{$type['image']}}" alt="img-type">
                    </div>
                    <p class="d-flex align-items-center">{{$type['description']}}</p>
                </div>
                {{-- <div class="text-light d-flex gap-5 align-items-center justify-content-center" >
                    <div>Price: {{$comic['price']}}</div>
                    <div>Series: {{$comic['series']}}</div>
                    <div>Sale Date: {{$comic['sale_date']}}</div>
                    <div>Type: {{$comic['type']}}</div>
                </div> --}}
            </div>
            {{-- <div class="d-flex justify-content-center my-3"> --}}
                {{-- <button class="btn btn-primary rounded-0 custom-btn"> --}}
                    {{-- <a class="text-light" href="{{route('comics.edit', $comic['id'])}}">Modifica</a> --}}
                {{-- </button> --}}
            {{-- </div> --}}




        </div>
    </section>
    <div class="container">
        {{-- <a href="{{ route('types.edit', $type) }}" class="btn btn-warning">Modifica</a> --}}
    </div>
@endsection
