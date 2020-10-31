@extends('layouts.app')

@section('title', "Categorias - Plenitude Tao - A saberdoria do Tao")

@section('styles')
<link rel="stylesheet"
    href={{ env('APP_ENV', 'local') == 'local' ? asset('css/home-page-post-layout3.css?v=').time() :asset('public/css/home-page-post-layout3.css?v=').time() }}>
<link rel="stylesheet"
    href={{ env('APP_ENV', 'local') == 'local' ? asset('css/categories.css?v=').time() :asset('public/css/categories.css?v=').time() }}>
<style>

</style>
@endsection

@section('scripts')
@endsection

@section('content')

<div class="categories">
    @foreach ($post_categories as $category)
    @include('components.categories.card', [
    'card_id' => $category->id,
    'card_title' => $category->name,
    'card_imagem' => $post_categories_photos[$loop->index],
    ])
    @endforeach
</div>
@endsection
