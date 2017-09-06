@extends('layouts.login')

@section('content')
    <div class="container">
        <h1>Jeffery &amp; Associates</h1>
        @include('components.errors')
        <form action="{{ route('login') }}" method="POST" class="login">
            {{ csrf_field() }}
            <input
                required
                type="text"
                name="username"
                id="username"
                placeholder="Username"
                value="{{ @old('username') ?? '' }}"
            >
            <input
                required
                type="password"
                name="password"
                id="password"
                placeholder="Password"
            >

            <input type="submit" value="Login">

            <label for="remember" class="remember">
                <input
                    type="checkbox"
                    name="remember"
                    id="remember"
                    {{ @old('remember') ? 'checked' : '' }}
                >
                <p>Remember Me</p>
            </label>
        </form>
    </div>
@endsection
