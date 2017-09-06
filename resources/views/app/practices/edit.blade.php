@extends('layouts.app')

@section('content')
    <h2>Edit Practice</h2>

    @include('components.errors')

    @php $route = route('practices.update', ['id' => $practice->id]) @endphp
    <form action="{{ $route }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <input
            required
            type="text"
            name="name"
            id="name"
            value="{{ old('name') ?? $practice->name }}"
            placeholder="Name"
        />

        <input
            required
            type="tel"
            name="phone"
            id="phone"
            value="{{ old('phone') ?? $practice->phone }}"
            placeholder="Phone"
        />

        <input
            type="text"
            name="line1"
            id="line1"
            value="{{ old('line1') ?? $practice->line1 }}"
            placeholder="Address Line 1"
        />

        <input
            required
            type="text"
            name="line2"
            id="line2"
            value="{{ old('line2') ?? $practice->line2 ?? '' }}"
            placeholder="Address Line 2"
        />

        <input
            required
            type="text"
            name="city"
            id="city"
            value="{{ old('city') ?? $practice->city }}"
            placeholder="Town/City"
        />

        <input
            required
            type="text"
            name="county"
            id="county"
            value="{{ old('county') ?? $practice->county }}"
            placeholder="County"
        />

        <input
            required
            type="text"
            name="postcode"
            id="postcode"
            value="{{ old('postcode') ?? $practice->postcode }}"
            placeholder="Postcode"
        />

        <input
            type="submit"
            value="Update"
        />
    </form>
@endsection
