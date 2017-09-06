@if ($errors->count() >= 1)
    @foreach ($errors->all() as $error)
        <div class="notice error">
            <p>{{ $error }}</p>
        </div>
    @endforeach
@endif
