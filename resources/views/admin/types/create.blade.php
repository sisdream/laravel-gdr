@extends('layouts.app')

@section('title', 'Inserisci classe personaggio')

@section('content')
    <section>
        <div class="container py-4">
            <h1 class="text-center">Inserisci classe personaggio</h1>
            <form action="{{ route('types.store') }}" method="POST">
                @csrf
                <div class="col-12">
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control" type="text" id="name" name="name">
                </div>
                <div class="col-12">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" type="url" id="image" name="image">
                </div>
                <div class="col-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea rows="15" class="form-control" type="text" id="description" name="description"></textarea>
                </div>
                
                <div class="col-3 my-5">
                    <button type="submit" class="btn btn-success">Invia</button>
                </div>
            </form>
        </div>
    </section>

@endsection
