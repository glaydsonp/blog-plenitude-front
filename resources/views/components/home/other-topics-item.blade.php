<div class="other-topics">
    <a href={{ '/categorias/' . $category_id }}>
        <div class="other-topics__image">
            <img src="{{ $category_imagem }}" alt="{{ $category_title }}">
        </div>
        <p class="other-topics__title">
            {{-- <a href={{ '/categorias/' . $category_id }}> --}}
            {{ $category_title }}
            {{-- </a> --}}
        </p>
    </a>
</div>
