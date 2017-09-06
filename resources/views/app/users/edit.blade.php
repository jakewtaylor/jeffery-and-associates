@extends('layouts.app')

@section('content')
    <h2>Edit User</h2>

    @include('components.errors')

    @php $route = route('users.update', ['id' => $user->id]) @endphp
    <form action="{{ $route }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <input
            required
            type="text"
            name="name"
            id="name"
            value="{{ old('name') ?? $user->name }}"
            placeholder="Name"
        />

        <input
            disabled
            type="text"
            name="username"
            id="username"
            value="{{ $user->username }}"
            placeholder="Username"
        />

        <p>Leave password fields blank to ignore.</p>

        <input
            type="password"
            name="password"
            id="password"
            placeholder="New Password"
        />

        <input
            type="password"
            name="password_confirmation"
            id="password_confirmation"
            placeholder="Confirm New Password"
        />

        <input
            type="submit"
            value="Update"
        />
    </form>
@endsection
