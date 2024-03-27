@extends('layouts.app')

@section('title', 'Dettaglio')

@section('main-content')
    <section>
        <div class="container py-4">
            <strong>Nome: </strong> {{ $character->name }} <br />
            <strong>Descrizione: </strong> {{ $character->description }} <br />
            <strong>Attacco: </strong> {{ $character->attack }} <br />
            <strong>Difesa: </strong> {{ $character->defence }} <br />
            <strong>Velocità: </strong> {{ $character->speed }} <br />
            <strong>Vita:</strong> {{ $character->life }} <br />
        </div>
    </section>
    <div class="container">
        <a href="{{ route('characters.edit', $character) }}" class="btn btn-warning">Modifica</a>
    </div>
@endsection
