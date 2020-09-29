<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials._head')
</head>
<body>
    <div id="app">

    @include('partials._preloader')

    @include('partials._nav')

    <main id="main_container">
        @include('partials._messages')
        @yield('content')
    </main>

    @include('blocks.contact_cta')

    @include('partials._footer')

    @include('partials._login')
    @include('partials._register')

    @include('partials._javascript')

    @yield('scripts')

    </div>

</body>
</html>
