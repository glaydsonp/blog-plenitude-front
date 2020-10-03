<html>

<head>
    <title>
        @yield('title')
    </title>

    @include('fonts')
    @include('styles')

    @yield('styles')
</head>

<body>
    @include('shared.navbar')

    <div class="container">
        @yield('content')
    </div>

    @include('shared.footer')

    @include('scripts')
    @yield('scripts')
</body>

</html>
