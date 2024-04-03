@extends('layouts.app')

@section('title', 'Modifica personaggio')

@section('content')
    <section>
        <div class="container py-4">
            <h1 class="text-center">Modifica personaggio</h1>
            <form action="{{ route('characters.update', $character) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="col-6">
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control" type="text" id="name" name="name" value="{{ $character['name'] }}">
                </div>
                <div class="col-6">
                    <label for="description" class="form-label">Description</label>
                    <input class="form-control" type="text" id="description" name="description"
                        value="{{ $character['description'] }}">
                </div>
                <div class="col-6">
                    <label for="attack" class="form-label">Attack</label>
                    <input class="form-control" type="number" id="attack" name="attack"
                        value="{{ $character['attack'] }}">
                </div>
                <div class="col-6">
                    <label for="defence" class="form-label">Defence</label>
                    <input class="form-control" type="number" id="defence" name="defence"
                        value="{{ $character['defence'] }}">
                </div>
                <div class="col-6">
                    <label for="speed" class="form-label">Speed</label>
                    <input class="form-control" type="number" id="speed" name="speed"
                        value="{{ $character['speed'] }}">
                </div>
                <div class="col-6">
                    <label for="life" class="form-label">Life</label>
                    <input class="form-control" type="number" id="life" name="life"
                        value="{{ $character['life'] }}">
                </div>
                <div class="col-3 my-5">
                    <button type="submit" class="btn btn-warning">Modifica</button>
                </div>
            </form>
        </div>
    </section>

@endsection
