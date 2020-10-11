@extends('layouts.app')

@section('title', $page_title)

@section('styles')
<link rel="stylesheet" href={{ asset('public/css/post-details.css?v=').time() }}>
<!-- <link rel="stylesheet" href={{ env('APP_ENV', 'local') == 'local' ? asset('public/css/post-details.css') : asset('public/css/post-details.css') }}> -->
@endsection

@section('scripts')
<!-- <script src={{ env('APP_ENV', 'local') == 'local' ? asset('js/home-scripts.js') : asset('public/js/home-scripts.js') }}>
</script> -->
@endsection

@section('content')

<div class="main-img">
    <img src={{ $post_details["_embedded"]["wp:featuredmedia"][0]["link"] }} alt="">
</div>

<div class="post-content">
    <h5 class="title">
        {{ $post_details["title"]["rendered"] }}
    </h5>

    <span class="publish-date">
        Texto por {{ $post_details["_embedded"]["author"][0]["name"] }} - Atualizado em: {{ Carbon\Carbon::createFromTimestamp($post_details["modified"])->format('d-m-Y') }}
    </span>

    <div class="excerpt">
        {!! $post_details["excerpt"]["rendered"] !!}
    </div>

    <div class="post-body">
        {!! $post_details["content"]["rendered"] !!}
    </div>




    <div class="categories">
        @foreach ($post_details["_embedded"]["wp:term"] as $categories)
        @foreach ($categories as $categories_nested)
        <button class="category-button">
            {{ $categories_nested["name"] }}
        </button>
        @endforeach
        @endforeach
    </div>

    <div class="share">
        <span>Compartilhe</span>
        <div class="share__items">
            <button>
                <img src={{ asset('public/images/icons/linkedin.svg') }} alt="linkedin">
            </button>
            <button>
                <img src={{ asset('public/images/icons/facebook.svg') }} alt="facebook">
            </button>
            <button>
                <img src={{ asset('public/images/icons/instagram.svg') }} alt="instagram">
            </button>
        </div>
    </div>
</div>

@endsection
