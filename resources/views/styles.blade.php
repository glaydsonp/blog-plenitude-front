<link rel="stylesheet"
    href={{ env('APP_ENV', 'local') == 'local' ? asset('/css/app.css') : asset('public/css/app.css') }}>
<link rel="stylesheet"
    href={{ env('APP_ENV', 'local') == 'local' ? asset('/css/main.css') : asset('public/css/main.css') }}>
<link rel="stylesheet" href={{ asset('/public/css/home-topnav.css?v=').time() }} >
