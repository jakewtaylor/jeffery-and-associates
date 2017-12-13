@extends('layouts.app')

@section('content')
    <h2>Create Manufacturer</h2>

    @include('components.errors')

    <form action="{{ route('manufacturers.store') }}" method="post">
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

        <input type="submit" value="Create Manufacturer">
    </form>
@endsection
