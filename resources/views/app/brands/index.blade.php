@extends('layouts.app')

@section('content')
    <h2>Brands</h2>

    <div class="scroller">
        @if ($groupedBrands->count() > 0)
            @foreach ($groupedBrands->keys() as $letter)
                <a href="#{{ $letter }}">{{ $letter }}</a>
            @endforeach
        @endif
    </div>

    <div class="cards">
        <a href="{{ route('brands.create') }}" class="card blue-outline center">
            <div class="header">
                <h1>Add</h1>
                <i class="material-icons">add</i>
            </div>
        </a>

        @forelse ($groupedBrands as $letter => $brands)
            <div class="card blue-inverted" id="{{ $letter }}">
                <div class="header">
                    <h1>{{ $letter }}</h1>
                </div>
                <div class="body">
                    @foreach ($brands as $brand)
                        @php
                            $route = route('brands.show', [
                                'id' => $brand->id,
                            ])
                        @endphp
                        <p><a href="{{ $route }}">{{ $brand->name }}</a></p>
                    @endforeach
                </div>
            </div>
        @empty
            <div class="card blue-inverted">
                <div class="body">
                    <p>No brands.</p>
                </div>
            </div>
        @endforelse
    </div>
@endsection
