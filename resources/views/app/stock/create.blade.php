@extends('layouts.app')

@section('content')
    <h1>Create Stock</h1>

    @include('components.errors')

    <form action="{{ route('stock.store') }}" method="post">
        {{ csrf_field() }}

        <select name="brand" id="brand">
            @php $selected = old('brand') ?? optional($selectedBrand)->id ?? false; @endphp
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}" {{ $brand->id === $selected ? 'selected' : '' }}>
                    {{ $brand->name }}
                </option>
            @endforeach
        </select>

        <input
            required
            type="text"
            name="model"
            id="model"
            value="{{ old('model') ?? '' }}"
            placeholder="Model"
        />

        <input
            required
            type="number"
            name="eyesize"
            id="eyesize"
            value="{{ old('eyesize') ?? '' }}"
            placeholder="Eyesize"
        />

        <input
            required
            type="number"
            name="dbl"
            id="dbl"
            value="{{ old('dbl') ?? '' }}"
            placeholder="DBL"
        />

        <input
            required
            type="text"
            name="colour"
            id="colour"
            value="{{ old('colour') ?? '' }}"
            placeholder="Colour"
        />

        <!-- Manufacturer here! -->

        <input
            required
            type="number"
            name="price"
            id="price"
            value="{{ old('price') ?? '' }}"
            placeholder="Price"
            min="0"
            step="0.01"
        />

        <input
            required
            type="text"
            name="year"
            id="year"
            value="{{ old('year') ?? '' }}"
            placeholder="Year"
        />

        <input
            required
            type="text"
            name="code"
            id="code"
            value="{{ old('code') ?? '' }}"
            placeholder="Code"
        />

        <input type="submit" value="Create Stock">
    </form>
@endsection
