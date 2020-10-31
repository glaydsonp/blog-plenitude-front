{{-- {{ dd($_SERVER["SERVER_NAME"].'/post/' . $post_id) }} --}}
<div class="home-post-layout2">
    <div class="home-post-layout2__wrapper">
        <div class="home-post-layout2__image">
            <img src={{ $post_imagem }} alt={{ $post_title }}>
        </div>
        <div class="home-post-layout2__preview">
            <div class="home-post-layout2__post-wrapper">
                <div class="home-post-layout2__post-excerpt">
                    {!! $post_excerpt !!}
                </div>
                <div class="home-post-layout2__post-more">
                    <a href={{ '/post/' . $post_id }}>
                        Saiba mais
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
