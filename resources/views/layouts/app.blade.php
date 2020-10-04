<html>

<head>
    <title>
        @yield('title')
    </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

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
