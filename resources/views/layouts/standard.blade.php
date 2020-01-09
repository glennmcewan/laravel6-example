<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ $title ?? config('app.name') }}</title>
        @include('layouts.components.head')
    </head>
    <body>
        <div id="app">
            @include('layouts.components.nav')
            <main class="py-4">
                @yield('content')
            </main>
            @include('layouts.components.footer')
            @include('layouts.components.footer-scripts')
        </div>
    </body>
</html>
