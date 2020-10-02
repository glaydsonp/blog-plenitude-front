@extends('layouts.app')

@section('title', $page_title)

@section('content')

<p>Essa é a minha home page.</p>

@foreach ($post_collection as $post_details)

@component('components.post-details', [
'post_id' => $post_details["id"],
'post_title' => $post_details["title"]["rendered"],
'post_imagem' => $post_details["_embedded"]["wp:featuredmedia"][0]["link"],
])
@endcomponent

@endforeach

@endsection
