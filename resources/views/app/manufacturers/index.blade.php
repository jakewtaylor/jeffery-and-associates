@extends('layouts.app')

@section('content')
    <h1>Manufacturers</h1>

    <div class="scroller">
        @if ($groupedManufacturers->count() > 0)
            @foreach ($groupedManufacturers->keys() as $letter)
                <a href="#{{ $letter }}">{{ $letter }}</a>
            @endforeach
        @endif
    </div>

    <div class="cards">
        <a href="{{ route('manufacturers.create') }}" class="card green-outline center">
            <div class="header">
                <h1>Add</h1>
                <i class="material-icons">add</i>
            </div>
        </a>

        @forelse ($groupedManufacturers as $letter => $manufacturers)
            <div class="card green-inverted" id="{{ $letter }}">
                <div class="header">
                    <h1>{{ $letter }}</h1>
                </div>
                <div class="body">
                    @foreach ($manufacturers as $manufacturer)
                        @php
                            $route = route('manufacturers.show', [
                                'id' => $manufacturer->id,
                            ])
                        @endphp
                        <p><a href="{{ $route }}">{{ $manufacturer->name }}</a></p>
                    @endforeach
                </div>
            </div>
        @empty
            <div class="card green-inverted">
                <div class="body">
                    <p>No manufacturers.</p>
                </div>
            </div>
        @endforelse
    </div>
@endsection
