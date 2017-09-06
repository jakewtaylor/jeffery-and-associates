@extends('layouts.app')

@section('content')
    <h2>Practices</h2>

    <div class="cards">
        @forelse ($practices as $practice)
            @php
                $url = route('practices.show', [
                    'practice' => $practice->id,
                ]);
            @endphp
            <a href="{{ $url }}" class="card pink">
                <div class="header">
                    <h1>{{ $practice->name }}</h1>
                    <h2>{{ $practice->phone }}</h2>
                </div>
                <div class="body">
                    <p>{!! nl2br($practice->address) !!}</p>
                </div>
            </a>
        @empty

        @endforelse

        <a href="{{ route('practices.create') }}" class="card add pink-outline">
            <div class="header">
                <h1>Add</h1>
                <i class="material-icons">add</i>
            </div>
        </a>
    </div>
@endsection
