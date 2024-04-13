@extends('layouts.app')

@section('title', 'Types table')

@section('content')
    <section>
        <div class="container py-4">
            <a href="{{ route('types.create') }}" role="button" class="btn btn-primary">Crea classe personaggio</a>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">image</th>
                        <th scope="col">description </th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($types as $type)
                        <tr>
                            <th scope="col"> {{ $type->name }}</th>
                            <td scope="col">
                                <img src="{{ asset($type->image) }}" class="w-50" alt="">
                            </td>

                            <td scope="col">{{ $type->get_description(450) }}</td>
                            <td scope="col">
                                <a href="{{ route('types.show', $type) }}"> Dettaglio</a>
                            </td>
                            <td scope="col">
                                <a href="{{ route('types.edit', $type) }}"> Modifica</a>
                            </td>
                            <td scope="col">
                                <a class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete-type-{{ $type->id }}-modal"><i
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
    @foreach ($types as $type)
        <div class="modal fade " id="delete-type-{{ $type->id }}-modal" data-bs-backdrop="static"
            data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">!!!ATTENZIONE!!!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Sei arrivato ad un punto dove devi scegliere: o tieni {{ $type->label }} o lo cancelli!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Torrabi</button>

                        <form action="{{ route('types.destroy', $type) }} " method="POST">
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
