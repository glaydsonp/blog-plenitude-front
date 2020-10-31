@extends('layouts.app')

@section('title', $page_title)

@section('styles')
<!-- <link rel="stylesheet" href={{ env('APP_ENV', 'local') == 'local' ? asset('public/css/post-details.css') : asset('public/css/post-details.css') }}> -->
<link rel="stylesheet"
    href={{ env('APP_ENV', 'local') == 'local' ? asset('css/categories.css?v=').time() :asset('public/css/categories.css?v=').time() }}>
<link rel="stylesheet"
    href={{ env('APP_ENV', 'local') == 'local' ? asset('css/home-page-post-layout2.css?v=').time() :asset('public/css/home-page-post-layout2.css?v=').time() }}>
@endsection

@section('scripts')
<!-- <script src={{ env('APP_ENV', 'local') == 'local' ? asset('js/home-scripts.js') : asset('public/js/home-scripts.js') }}>
</script> -->
@endsection

@section('content')
<div class="categories__wrapper">
    @foreach ($post_collection as $post_item)
    <div class="categories__item">
        @include('components.home.layout2', [
        'post_id' => $post_item["id"],
        'post_title' => $post_item["title"]["rendered"],
        'post_excerpt' => $post_item["excerpt"]["rendered"],
        'post_imagem' => $post_item["_embedded"]["wp:featuredmedia"][0]["link"],
        ])
    </div>
    @endforeach
</div>
@endsection
