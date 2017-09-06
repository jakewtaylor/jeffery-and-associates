<header>
    <h1>
        <a href="{{ route('dashboard') }}">J&amp;A</a>
    </h1>

    @php
        function active (string $path) : string {
            return Request::is("$path*") ? 'active' : '';
        }
    @endphp

    <nav>
        @php
            $route = route('practices.index');
            $active = active('practices');
        @endphp
        <a href="{{ $route }}" class="pink {{ $active }}">Practices</a>

        @php
            $route = route('users.index');
            $active = active('users');
        @endphp
        <a href="{{ $route }}" class="orange {{ $active }}">Users</a>

        @php
            $route = route('brands.index');
            $active = active('brands');
        @endphp
        <a href="{{ $route }}" class="blue {{ $active }}">Brands</a>

        @php
            $route = route('stock.index');
            $active = active('stock');
        @endphp
        <a href="{{ $route }}" class="red {{ $active }}">Stock</a>

        @php
            $route = route('manufacturers.index');
            $active = active('manufacturers');
        @endphp
        <a href="{{ $route }}" class="green">Manufacturers</a>

        <a href="#" class="purple">Jobs</a>
        <a href="#" class="yellow">Contact Lenses</a>
    </nav>
</header>
