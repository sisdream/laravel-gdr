@extends('layouts.app')

@section('title', 'Characters table')

@section('main-content')
    <section>
        <div class="container py-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">description</th>
                        <th scope="col">attack</th>
                        <th scope="col">defence </th>
                        <th scope="col">speed </th>
                        <th scope="col">life </th>
                    </tr>

                <tbody>
                    @foreach ($characters as $character)
                        <tr>
                            <td scope="col">{{ $character->name }}</td>
                            <td scope="col">{{ $character->description }}</td>
                            <td scope="col">{{ $character->attack }}</td>
                            <td scope="col">{{ $character->defence }}</td>
                            <td scope="col">{{ $character->speed }}</td>
                            <td scope="col">{{ $character->life }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
