<div class="home-post-layout3">
    <div class="home-post-layout3__wrapper">
        <div class="home-post-layout3__preview">
            <div class="home-post-layout3__post-wrapper">
                <div class="home-post-layout3__post-title">
                    {{ $card_title }}
                </div>
                <div class="home-post-layout3__post-more">
                    <a href={{ '/categorias/' . $card_id }}>
                        Saiba mais
                    </a>
                </div>
            </div>
        </div>
        <div class="home-post-layout3__image">
            <img src={{ $card_imagem }} alt={{ $card_title }}>
        </div>
    </div>
</div>
