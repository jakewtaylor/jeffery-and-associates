@extends('layouts.app')

@section('content')
    <h2>Stock</h2>

    <div class="cards">
        <div class="card full red-inverted">
            <div class="actions">
                <a href="{{ route('stock.create') }}">Add Stock</a>
            </div>

            <div class="body">
                @if ($stocks->count() > 0)
                    <table>
                        <thead>
                            <tr>
                                <th>Brand</th>
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
                            @foreach ($stocks as $stock)
                                <tr>
                                    <td>
                                        <a href="{{ route('brands.show', $stock->brand) }}">
                                            {{ $stock->brand->name }}
                                        </a>
                                    </td>
                                    <td>{{ $stock->model }}</td>
                                    <td>{{ $stock->eyesize }}</td>
                                    <td>{{ $stock->dbl }}</td>
                                    <td>{{ $stock->colour }}</td>
                                    <td>
                                        <a href="{{ route('manufacturers.show', $stock->manufacturer) }}">
                                            {{ $stock->manufacturer->name }}
                                        </a>
                                    </td>
                                    <td>{{ $stock->price }}</td>
                                    <td>{{ $stock->year }}</td>
                                    <td>{{ $stock->code }}</td>
                                    <td></td>
                                </tr>
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
