<div class="home-post-layout3">
    <div class="home-post-layout3__wrapper">
        <div class="home-post-layout3__preview">
            <div class="home-post-layout3__post-wrapper">
                <div class="home-post-layout3__post-title">
                    {{ $post_title }}
                </div>
                <div class="home-post-layout3__post-more">
                    <a href={{ './post/' . $post_id }}>
                        Saiba mais
                    </a>
                </div>
            </div>
        </div>
        <div class="home-post-layout3__image">
            <img src={{ $post_imagem }} alt={{ $post_title }}>
        </div>
    </div>
</div>
