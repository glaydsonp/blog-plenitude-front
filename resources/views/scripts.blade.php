<script src={{ env('APP_ENV', 'local') == 'local' ? asset('/js/app.js') : asset('public/js/app.js') }}></script>
<script
    src={{ env('APP_ENV', 'local') == 'local' ? asset('/js/navbar-scripts.js') : asset('public/js/navbar-scripts.js') }}>
</script>
