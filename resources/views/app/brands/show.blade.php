@extends('layouts.app')

@section('content')
    <h1>{{ $brand->name }}</h1>

    <div class="cards">
        <div class="card full blue-inverted">
            <div class="actions">
                @php
                    $route = route('stock.create', [
                        'brand' => $brand->id,
                    ])
                @endphp
                <a href="{{ $route }}">Add Stock</a>
            </div>
            <div class="header">
                <h1>Stock for {{ $brand->name }}</h1>
            </div>
            <div class="body">
                @if ($brand->stock->count() > 0)
                    <table>
                        <thead>
                            <tr>
                                <th>Model</th>
                                <th>Eyesize</th>
                                <th>DBL</th>
                                <th>Colour</th>
                                <th>Manufacturer</th>
                                <th>Price</th>
                                <th>Year</th>
                                <th>Code</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brand->stock as $stock)

                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No stock found.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
