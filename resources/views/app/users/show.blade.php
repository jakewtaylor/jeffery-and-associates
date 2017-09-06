@extends('layouts.app')

@section('content')
    <h2>Users</h2>

    @include('components.errors')

    <div class="cards">
        <div class="card orange-outline">
            <div class="actions">
                @php $route = route('users.edit', ['id' => $user->id]) @endphp
                <a href="{{ $route }}">Edit</a>
                <a href="#" class="popup-trigger" data-popup="delete">Delete</a>
            </div>
            <div class="header">
                <h1>{{ $user->name }}</h1>
                <h2>{{ $user->username }}</h2>
            </div>
        </div>
    </div>

    @php $route = route('users.destroy', ['id' => $user->id]) @endphp
    <div class="popup" id="popup-delete">
        <form action="{{ $route }}" method="POST" class="danger confirmation" id="delete-form">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <p>Are you sure you want to delete this user?</p>
            <input type="submit" value="Yes, delete this user">
            <a href="#" class="dismiss-popup" data-popup="delete">No, cancel</a>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="/js/popup.js"></script>
@endpush
