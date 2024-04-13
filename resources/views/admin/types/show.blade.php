@extends('layouts.app')

@section('title', 'Dettaglio')

@section('content')
    <section>
        <div class="container py-4">

            <div class="card">

                <h2 class="card-header text-center text-uppercase">{{$type->name}}</h2>

                <div class=" card-body d-flex my-3 gap-5">
                    <div class="card-img">
                        <img src="{{$type->image}}" alt="img-type">
                    </div>
                    <p class="d-flex align-items-center">{{$type->description}}</p>
                </div>

            </div>


        </div>
    </section>
    <div class="container">
        {{-- <a href="{{ route('types.edit', $type) }}" class="btn btn-warning">Modifica</a> --}}
    </div>
@endsection
