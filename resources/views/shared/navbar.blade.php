<div class="home-topnav">
    <div class="home-topnav__wrapper">
        <div class="home-topnav__menu">
            <div class="home-topnav__menu-wrapper">
                <div class="home-topnav__menu-item">
                    <a href="/">Início</a>
                </div>
                <div class="home-topnav__menu-item">
                    <a href="./categorias">Categorias</a>
                </div>
                <div class="home-topnav__menu-item">
                    <a href="#" target="_blank">Loja</a>
                </div>
            </div>
        </div>
        <div class="home-topnav__search">
            <a href="/pesquisar">
                <img src={{ env('APP_ENV', 'local') ? asset('images/icons/search-icon.png') : asset('public/images/icons/search-icon.png') }}
                    alt="Search Icon">
            </a>
        </div>
    </div>
</div>
