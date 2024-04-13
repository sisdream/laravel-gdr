@extends('layouts.app')

@section('title', 'Characters table')

@section('content')
    <section>
        <div class="container py-4">
            <a href="{{ route('characters.create') }}" role="button" class="btn btn-primary">Crea personaggio</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">attack</th>
                        <th scope="col">defence </th>
                        <th scope="col">life</th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($characters as $character)
                        <tr>
                            <td scope="col">{{ $character->name }}</td>
                            <td scope="col">{{ $character->attack }}</td>
                            <td scope="col">{{ $character->defence }}</td>
                            <td scope="col">{{ $character->life }}</td>
                            <td scope="col">
                                <a href="{{ route('characters.show', $character) }}"> Dettaglio </a>
                            </td>
                            <td scope="col">
                                <a class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete-character-{{ $character->id }}-modal"><i
                                        class="fa-solid fa-trash "></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection

@section('modal')
    <!-- Modal -->
    @foreach ($characters as $character)
        <div class="modal fade " id="delete-character-{{ $character->id }}-modal" data-bs-backdrop="static"
            data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">!!!ATTENZIONE!!!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Sei arrivato ad un punto dove devi scegliere: o tieni {{ $character->label }} o lo cancelli!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Torrabi</button>

                        <form action="{{ route('characters.destroy', $character) }} " method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">E se poi te ne penti?</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection




@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
