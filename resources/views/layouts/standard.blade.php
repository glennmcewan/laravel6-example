<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ $title }}</title>
        @include('layouts.components.head')
    </head>
    <body>
        @include('layouts.components.nav')
        @yield('content')
        @include('layouts.components.footer')
        @include('layouts.components.footer-scripts')
    </body>
</html>
