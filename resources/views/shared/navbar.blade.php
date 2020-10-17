@section('scripts')
<script src={{ asset('public/js/navbar-scripts.js') }}></script>

<div class="overlay" id="menuOverlay"></div>

<div class="home-topnav__icon">
    <button type="button" onclick="toggleSidebar()">
        <img src={{ asset('public/images/icons/navbar-menu-icon.svg') }} alt="menu">
    </button>
</div>

<div class="home-topnav" id="sidebarMenu">
    <div class="home-topnav__wrapper">
        <div class="home-topnav__menu">
            <div class="home-topnav__menu-wrapper">
                <div class="home-topnav__menu-logo">
                    <img src={{ asset('public/images/logo-sidebar.svg') }} alt="logo">
                </div>
                <div class="home-topnav__menu-item">
                    <a href="http://blog.plenitudetao.com/">Início</a>
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
                <img src={{ env('APP_ENV', 'local') == 'local' ? asset('images/icons/search-icon.png') : asset('public/images/icons/search-icon.png') }}
                    alt="Search Icon">

                {{-- <img height="47" width="45" src={{ asset('public/images/icons/search-icon.png') }}> --}}
            </a>
        </div>
    </div>
</div>
