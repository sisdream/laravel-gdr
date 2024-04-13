@extends('layouts.app')

@section('title', 'Inserisci classe personaggio')

@section('content')
    <section>
        <div class="container py-4">
            <h1 class="text-center">Inserisci classe personaggio</h1>
            <form action="{{ route('types.update', $type) }}" method="POST">
                @csrf
                @method("PATCH")
                
                <div class="col-12">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{$type->name}}" class="form-control" type="text" id="name" name="name">
                </div>

                <div class="col-12">
                    <label for="image" class="form-label">Image</label>
                    <input value="{{$type->image}}" class="form-control" type="text" id="image" name="image">
                </div>

                <div class="col-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea rows="15" class="form-control" type="text" id="description" name="description">{{$type->description}}</textarea>
                </div>
                
                <div class="col-3 my-5">
                    <button type="submit" class="btn btn-success">Invia</button>
                </div>
            </form>
        </div>
    </section>

@endsection
