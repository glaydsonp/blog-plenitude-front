<div class="home-post-layout1">
    <div class="home-post-layout1__wrapper">
        <div class="home-post-layout1__preview">
            <div class="home-post-layout1__post-wrapper">
                <div class="home-post-layout1__post-title">
                    {{ $post_title }}
                </div>
                <div class="home-post-layout1__post-excerpt">
                    {!! $post_excerpt !!}
                </div>
                <div class="home-post-layout1__post-more">
                    <a href={{ './post/' . $post_id }}>
                        Saiba mais
                    </a>
                </div>
            </div>
        </div>
        <div class="home-post-layout1__image">
            <img src={{ $post_imagem }} alt={{ $post_title }}>
        </div>
    </div>
</div>
