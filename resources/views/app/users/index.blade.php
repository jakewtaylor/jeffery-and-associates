@extends('layouts.app')

@section('content')
    <h2>Users</h2>

    <div class="cards">
        @forelse ($users as $user)
            @php
                $url = route('users.show', [
                    'user' => $user->id,
                ]);
            @endphp
            <a href="{{ $url }}" class="card orange">
                <div class="header">
                    <h1>{{ $user->name }}</h1>
                    <h2>{{ $user->username }}</h2>
                </div>
            </a>
        @empty

        @endforelse

        <a href="{{ route('users.create') }}" class="card add orange-outline">
            <div class="header">
                <h1>Add</h1>
                <i class="material-icons">add</i>
            </div>
        </a>
    </div>
@endsection
