@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('content')
    <section>
        <div class="container py-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">name </th>
                        <th scope="col">slug </th>
                        <th scope="col">type</th>
                        <th scope="col">category </th>
                        <th scope="col">weight </th>
                        <th scope="col">cost </th>
                        <th scope="col">damage_dice </th>
                    </tr>

                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td scope="col">{{ $item->name }}</td>
                            <td scope="col">{{ $item->slug }}</td>
                            <td scope="col">{{ $item->type }}</td>
                            <td scope="col">{{ $item->category }}</td>
                            <td scope="col">{{ $item->weight }}</td>
                            <td scope="col">{{ $item->cost }}</td>
                            <td scope="col">{{ $item->damage_dice }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
