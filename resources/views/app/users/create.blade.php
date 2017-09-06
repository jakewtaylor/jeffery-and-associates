@extends('layouts.app')

@section('content')
    <h2>New User</h2>

    @include('components.errors')

    <form action="{{ route('users.store') }}" method="post">
        {{ csrf_field() }}

        <input
            required
            type="text"
            name="name"
            id="name"
            value="{{ old('name') ?? '' }}"
            placeholder="Name"
        />

        <input
            required
            type="text"
            name="username"
            id="username"
            value="{{ old('username') ?? '' }}"
            placeholder="Username"
        />

        <input
            required
            type="password"
            name="password"
            id="password"
            placeholder="Password"
        />

        <input
            required
            type="password"
            name="password_confirmation"
            id="password_confirmation"
            placeholder="Confirm Password"
        />

        <input
            type="submit"
            value="Create"
        />
    </form>
@endsection
