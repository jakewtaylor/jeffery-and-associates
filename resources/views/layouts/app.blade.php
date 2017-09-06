<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ !empty($title) ? "$title | " : '' }}{{ env("APP_NAME") }}</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('components.header')
        <div class="container">
            @yield('content')
        </div>
    </body>

    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>

    @stack('scripts')
</html>
