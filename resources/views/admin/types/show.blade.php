@extends('layouts.app')

@section('title', 'Dettaglio')

@section('content')
    <section>
        <div class="container py-4">
            <strong>Nome: </strong> {{ $type->name }} <br />
            {{-- <strong>Immagine: </strong> {{ $type->image }} <br /> --}}
            <img src="{{ asset($type->image) }}" alt="">
            <p>
                <strong>Descrizione: </strong> {{ $type->description }} <br />
            </p>
        </div>
    </section>
    <div class="container">
        {{-- <a href="{{ route('types.edit', $type) }}" class="btn btn-warning">Modifica</a> --}}
    </div>
@endsection
