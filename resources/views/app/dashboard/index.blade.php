@extends('layouts.app')

@section('content')
    <h2>Dashboard</h2>

    <div class="cards">
        <a href="{{ route('practices.index') }}" class="card pink">
            <div class="header">
                <h1>Practices</h1>
                <h2>{{ $practice_count }} total</h2>
            </div>
        </a>

        <a href="{{ route('users.index') }}" class="card orange">
            <div class="header">
                <h1>Users</h1>
                <h2>{{ $user_count }} total</h2>
            </div>
        </a>

        <a href="{{ route('brands.index') }}" class="card blue">
            <div class="header">
                <h1>Brands</h1>
                <h2>{{ $brand_count }} total</h2>
            </div>
        </a>

        <a href="{{ route('stock.index') }}" class="card red">
            <div class="header">
                <h1>Stock</h1>
                <h2>{{ $stock_count }} total</h2>
            </div>
        </a>

        <a href="{{ route('manufacturers.index') }}" class="card green">
            <div class="header">
                <h1>Manufacturers</h1>
                <h2>{{ $manufacturer_count }} total</h2>
            </div>
        </a>

        <a href="#" class="card purple">
            <div class="header">
                <h1>Jobs</h1>
                <h2>total</h2>
            </div>
        </a>

        <a href="#" class="card yellow">
            <div class="header">
                <h1>Contact Lenses</h1>
                <h2>total</h2>
            </div>
        </a>
    </div>
@endsection
