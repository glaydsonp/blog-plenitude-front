<html>

<head>
    <title>
        @yield('title')
    </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- inclui arquivo fonts.blade.php --}}
    @include('fonts')
    {{-- inclui arquivo styles.blade.php --}}
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
