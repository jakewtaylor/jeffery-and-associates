@extends('layouts.app')

@section('content')
    <h2>New Practice</h2>

    @include('components.errors')

    <form action="{{ route('practices.store') }}" method="post">
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
            type="tel"
            name="phone"
            id="phone"
            value="{{ old('phone') ?? '' }}"
            placeholder="Phone"
        />

        <input
            type="text"
            name="line1"
            id="line1"
            value="{{ old('line1') ?? '' }}"
            placeholder="Address Line 1"
        />

        <input
            required
            type="text"
            name="line2"
            id="line2"
            value="{{ old('line2') ?? '' }}"
            placeholder="Address Line 2"
        />

        <input
            required
            type="text"
            name="city"
            id="city"
            value="{{ old('city') ?? '' }}"
            placeholder="Town/City"
        />

        <input
            required
            type="text"
            name="county"
            id="county"
            value="{{ old('county') ?? '' }}"
            placeholder="County"
        />

        <input
            required
            type="text"
            name="postcode"
            id="postcode"
            value="{{ old('postcode') ?? '' }}"
            placeholder="Postcode"
        />

        <input
            type="submit"
            value="Create"
        />
    </form>
@endsection
