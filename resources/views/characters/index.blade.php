@extends('layouts.app')

@section('title', 'Characters table')

@section('main-content')
    <section>
        <div class="container py-4">
            <a href="{{ route('characters.create') }}" role="button" class="btn btn-primary">Crea personaggio</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">attack</th>
                        <th scope="col">defence </th>
                        <th scope="col">life </th>
                        <th scope="row">{{ $character->id }}</th>
                    </tr>

                <tbody>
                    @foreach ($characters as $character)
                        <tr>
                            <td scope="col">{{ $character->name }}</td>
                            <td scope="col">{{ $character->attack }}</td>
                            <td scope="col">{{ $character->defence }}</td>
                            <td scope="col">{{ $character->life }}</td>
                            <a href="{{ route('characters.show', $character) }}"> Dettaglio </a>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
