<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials._head')
</head>
<body>
    <!-- Page Loading -->
<div class="se-pre-con"></div>
    <div id="app">

        {{-- @include('layouts.partials._navigation') --}}
        <header class="header-global">
            @include('layouts.partials._navigation')
        </header>
            @yield('content')
    </div>

    @include('layouts.partials.footer')

    @include('layouts.partials._scripts')
</body>
</html>
