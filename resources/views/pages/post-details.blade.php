@extends('layouts.app')

@section('title', $page_title)

@section('content')

<p>post id = {{ $post_id }}</p>
<p>Essa é a minha página de detalhe de post.</p>
<p>
    Post Title -> <br> {{ $post_details["title"]["rendered"] }}
</p>
<p>
    Publish Date -> <br> {{ $post_details["date"] }}
</p>
<p>
    Post Excerpt -> <br> {!! $post_details["excerpt"]["rendered"] !!}
</p>
<p>
    {{-- Author Name -> <br> {{ $post_details["_embedded"]["author"][0]["name"] }} --}}
</p>
<p>
    Featured Image -> <br> {{ $post_details["_embedded"]["wp:featuredmedia"][0]["link"] }}
    <div>
        <img style="width: 25vw" src={{ $post_details["_embedded"]["wp:featuredmedia"][0]["link"] }} alt="">
    </div>
</p>
<p>
    @foreach ($post_details["_embedded"]["wp:term"] as $categories)
    @foreach ($categories as $categories_nested)
    <div>
        {{ $categories_nested["name"] }}
    </div>
    @endforeach
    @endforeach
</p>
<p>
    Post Body -> <br> {!! $post_details["content"]["rendered"] !!}
</p>

@endsection
