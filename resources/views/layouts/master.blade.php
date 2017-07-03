<!DOCTYPE html>
<html lang="es-mx">
<head>
    <title>Reservations - @yield('bc-title')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('layouts._styles')
    @yield('custom_styles')
</head>
<body>
    @include('layouts.menu')
    <div class="" id="content">
        @yield('content')
    </div>
    @include('layouts.footer')
    @include('layouts._scripts')
    @yield('custom_scripts')
</body>