@extends('layouts.app')

@section('title', 'Types table')

@section('content')
    <section>
        <div class="container py-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">image</th>
                        <th scope="col">description </th>
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

                            <td scope="col">{{  $type->get_description(450)}}</td>
                            <td scope="col">
                                <a href="{{ route('types.show', $type) }}"> Dettaglio </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
