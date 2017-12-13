@extends('layouts.app')

@section('content')
    <h2>Brands</h2>

    @include('components.errors')

    <div class="cards">
        <div class="card blue-outline">
            <div class="actions">
                <a href="{{ route('brands.edit', $brand) }}">
                    Edit
                </a>
                <a href="#" class="popup-trigger" data-popup="delete">
                    Delete
                </a>
            </div>

            <div class="header">
                <h1>{{ $brand->name }}</h1>
            </div>
        </div>

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
                                <tr>
                                    <td>{{ $stock->model }}</td>
                                    <td>{{ $stock->eyesize }}</td>
                                    <td>{{ $stock->dbl }}</td>
                                    <td>{{ $stock->colour }}</td>
                                    @php $route = route('manufacturers.show', [
                                        'id' => $stock->manufacturer->id,
                                    ]) @endphp
                                    <td>
                                        <a href="{{ $route }}">
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

    <div class="popup" id="popup-delete">
        <form
            action="{{ route('brands.destroy', $brand) }}"
            method="POST"
            class="danger confirmation"
            id="delete-form"
        >
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <p>Are you sure you want to delete this brand?</p>
            <input type="submit" value="Yes, delete this brand">
            <a href="#" class="dismiss-popup" data-popup="delete">No, cancel</a>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="/js/popup.js"></script>
@endpush
