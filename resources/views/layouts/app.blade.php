<html>

<head>
    <title>@yield('title')</title>
</head>

<body>

    @component('shared.navbar')
    @endcomponent

    <div class="container">
        @yield('content')
    </div>

    @component('shared.footer')
    @endcomponent
</body>

</html>
