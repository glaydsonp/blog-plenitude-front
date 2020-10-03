@extends('layouts.app')

@section('title', $page_title)

@section('styles')
<link rel="stylesheet" href={{ asset('css/home.css') }}>
<link rel='stylesheet' href={{ asset('css/home-topnav.css') }}>
<link rel='stylesheet' href={{ asset('css/home-page-post-layout1.css') }}>
@endsection

@section('scripts')
<script src={{ asset('js/home-scripts.js') }}></script>
@endsection

@section('content')

{{-- loop over post array --}}
@foreach ($post_collection as $post_details)

{{-- if first item of the array --}}
@if ($loop->first)
@include('components.home.layout1', [
'post_id' => $post_details["id"],
'post_title' => $post_details["title"]["rendered"],
'post_excerpt' => $post_details["excerpt"]["rendered"],
'post_imagem' => $post_details["_embedded"]["wp:featuredmedia"][0]["link"],
])

{{-- if it's not the first item of the array --}}
@else

@include('components.post-details', [
'post_id' => $post_details["id"],
'post_title' => $post_details["title"]["rendered"],
'post_imagem' => $post_details["_embedded"]["wp:featuredmedia"][0]["link"],
])

@endif


@endforeach

@endsection
