@extends('layouts.app')

@section('title', $page_title)

@section('styles')
<!-- <link rel="stylesheet" href={{ env('APP_ENV', 'local') == 'local' ? asset('/css/home.css') : asset('public/css/home.css') }}>
<link rel='stylesheet' href={{ env('APP_ENV', 'local') == 'local' ? asset('/css/home-topnav.css') : asset('public/css/home-topnav.css') }}>
<link rel='stylesheet' href={{ env('APP_ENV', 'local') == 'local' ? asset('/css/home-page-post-layout1.css') : asset('public/css/home-page-post-layout1.css') }}>
<link rel='stylesheet' href={{ env('APP_ENV', 'local') == 'local' ? asset('/css/home-page-post-layout2.css') : asset('public/css/home-page-post-layout2.css') }}>
<link rel='stylesheet' href={{ env('APP_ENV', 'local') == 'local' ? asset('/css/home-page-post-layout3.css') : asset('public/css/home-page-post-layout3.css') }}> -->

<link rel="stylesheet"
    href={{ env('APP_ENV', 'local') == 'local' ? asset('css/home.css?v=').time() :asset('public/css/home.css?v=').time() }}>
<link rel="stylesheet"
    href={{ env('APP_ENV', 'local') == 'local' ? asset('css/home-page-post-layout1.css?v=').time() :asset('public/css/home-page-post-layout1.css?v=').time() }}>
<link rel="stylesheet"
    href={{ env('APP_ENV', 'local') == 'local' ? asset('css/home-page-post-layout2.css?v=').time() :asset('public/css/home-page-post-layout2.css?v=').time() }}>
<link rel="stylesheet"
    href={{ env('APP_ENV', 'local') == 'local' ? asset('css/home-page-post-layout3.css?v=').time() :asset('public/css/home-page-post-layout3.css?v=').time() }}>

@endsection

@section('scripts')
<script src={{ env('APP_ENV', 'local') == 'local' ? asset('js/home-scripts.js') : asset('public/js/home-scripts.js') }}>
</script>
@section('content')

<div class="home-posts">


    @include('components.home.layout1', [
    'post_id' => $post_collection[0]["id"],
    'post_title' => $post_collection[0]["title"]["rendered"],
    'post_excerpt' => $post_collection[0]["excerpt"]["rendered"],
    'post_imagem' => $post_collection[0]["_embedded"]["wp:featuredmedia"][0]["link"],
    ])

    <section class="home-layout-wrapper">
        <div class="home-layout2">
            @include('components.home.layout2', [
            'post_id' => $post_collection[1]["id"],
            'post_title' => $post_collection[1]["title"]["rendered"],
            'post_excerpt' => $post_collection[1]["excerpt"]["rendered"],
            'post_imagem' => $post_collection[1]["_embedded"]["wp:featuredmedia"][0]["link"],
            ])
        </div>

        <div class="home-layout3">
            @include('components.home.layout3', [
            'post_id' => $post_collection[2]["id"],
            'post_title' => $post_collection[2]["title"]["rendered"],
            'post_imagem' => $post_collection[2]["_embedded"]["wp:featuredmedia"][0]["link"],
            ])

            @include('components.home.layout3', [
            'post_id' => $post_collection[3]["id"],
            'post_title' => $post_collection[3]["title"]["rendered"],
            'post_imagem' => $post_collection[3]["_embedded"]["wp:featuredmedia"][0]["link"],
            ])
        </div>

    </section>

    <section class="home__outros-assuntos">
        <div class="home__outros-assuntos__wrapper">
            <div class="home__outros-assuntos__content">
                @foreach ($post_categories as $post_category)
                @if ($post_category->id != 1)
                @include('components.home.other-topics-item', [
                'category_id' => $post_category->id,
                'category_title' => $post_category->name,
                'category_imagem' => $post_categories_photos[$loop->index],
                ])
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <footer class="footer__homepage">
        <div class="footer__content">
        </div>
    </footer>
</div>

@endsection
