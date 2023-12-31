<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @viteReactRefresh
        @vite('resources/js/main.jsx')
    </head>
    <body>
    @yield('content')
    <script>
        window.categories = @json($categories)
    </script>
    </body>
    @yield('scripts')
</html>