@extends('layouts.app')

@section('content')
    <h2>Practices</h2>

    @include('components.errors')

    <div class="cards">
        <div class="card pink-outline">
            <div class="actions">
                @php $route = route('practices.edit', ['id' => $practice->id]) @endphp
                <a href="{{ $route }}">Edit</a>
                <a href="#" class="popup-trigger" data-popup="delete">Delete</a>
            </div>
            <div class="header">
                <h1>{{ $practice->name }}</h1>
                <h2>{{ $practice->phone }}</h2>
            </div>
            <div class="body">
                <p>{!! nl2br($practice->address) !!}</p>
            </div>
        </div>
    </div>

    <div class="popup" id="popup-delete">
        <form
            action="{{ route('practices.destroy', $practice) }}"
            method="POST"
            class="danger confirmation"
            id="delete-form"
        >
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <p>Are you sure you want to delete this practice?</p>
            <input type="submit" value="Yes, delete this practice">
            <a href="#" class="dismiss-popup" data-popup="delete">No, cancel</a>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="/js/popup.js"></script>
@endpush
