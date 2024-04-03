@extends('layouts.app')

@section('title', 'Crea personaggio')

@section('content')
    <section>
        <div class="container py-4">
            <h1 class="text-center">Crea nuovo personaggio</h1>
            <form action="{{ route('characters.store') }}" method="POST">
                @csrf
                <div class="col-6">
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control" type="text" id="name" name="name">
                </div>
                <div class="col-6">
                    <label for="description" class="form-label">Description</label>
                    <input class="form-control" type="text" id="description" name="description">
                </div>
                <div class="col-6">
                    <label for="attack" class="form-label">Attack</label>
                    <input class="form-control" type="number" id="attack" name="attack">
                </div>
                <div class="col-6">
                    <label for="defence" class="form-label">Defence</label>
                    <input class="form-control" type="number" id="defence" name="defence">
                </div>
                <div class="col-6">
                    <label for="speed" class="form-label">Speed</label>
                    <input class="form-control" type="number" id="speed" name="speed">
                </div>
                <div class="col-6">
                    <label for="life" class="form-label">Life</label>
                    <input class="form-control" type="number" id="life" name="life">
                </div>
                <div class="col-3 my-5">
                    <button type="submit" class="btn btn-success">Invia</button>
                </div>
            </form>
        </div>
    </section>

@endsection
