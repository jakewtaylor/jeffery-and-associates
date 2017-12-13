@extends('layouts.app')

@section('content')
    <h2>Create Brand</h2>

    @include('components.errors')

    <form action="{{ route('brands.store') }}" method="post">
        {{ csrf_field() }}

        <label for="name">Name</label>
        <input
            required
            type="text"
            name="name"
            id="name"
            value="{{ old('name') ?? '' }}"
            placeholder="Name"
        />

        <input type="submit" value="Create Brand">
    </form>
@endsection
