@extends('layouts.app')

@section('content')
    <h1>Create Stock</h1>

    @include('components.errors')

    <form action="{{ route('stock.store') }}" method="post">
        {{ csrf_field() }}

        <label for="brand">Brand</label>
        <select name="brand" id="brand">
            @php $selected = old('brand') ?? optional($selectedBrand)->id ?? false; @endphp
            @foreach ($brands as $letter => $brandsGroup)
                <optgroup label="{{ $letter }}">
                    @foreach ($brandsGroup as $brand)
                        <option value="{{ $brand->id }}" {{ $brand->id === $selected ? 'selected' : '' }}>
                            {{ $brand->name }}
                        </option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>

        <label for="model">Model</label>
        <input
            required
            type="text"
            name="model"
            id="model"
            value="{{ old('model') ?? '' }}"
            placeholder="Model"
        />

        <label for="eyesize">Eyesize</label>
        <input
            required
            type="number"
            name="eyesize"
            id="eyesize"
            value="{{ old('eyesize') ?? '' }}"
            placeholder="Eyesize"
        />

        <label for="dbl">DBL</label>
        <input
            required
            type="number"
            name="dbl"
            id="dbl"
            value="{{ old('dbl') ?? '' }}"
            placeholder="DBL"
        />

        <label for="colour">Colour</label>
        <input
            required
            type="text"
            name="colour"
            id="colour"
            value="{{ old('colour') ?? '' }}"
            placeholder="Colour"
        />

        <label for="manufacturer">Manufacturer</label>
        <select name="manufacturer" id="manufacturer">
            @php $selected = old('manufacturer') ?? false; @endphp
            @foreach ($manufacturers as $letter => $manufacturersGroup)
                <optgroup label="{{ $letter }}">
                    @foreach ($manufacturersGroup as $manufacturer)
                        <option value="{{ $manufacturer->id }}" {{ $manufacturer->id === $selected ? 'selected' : '' }}>
                            {{ $manufacturer->name }}
                        </option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>

        <label for="price">Price</label>
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

        <label for="year">Year</label>
        <input
            required
            type="text"
            name="year"
            id="year"
            value="{{ old('year') ?? '' }}"
            placeholder="Year"
        />

        <label for="code">Code</label>
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
