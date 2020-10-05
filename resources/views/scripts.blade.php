<script src={{ env('APP_ENV', 'local') ? asset('/js/app.js') : asset('public/js/app.js') }}></script>
