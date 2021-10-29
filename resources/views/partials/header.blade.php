<header>
    <div class="container">
        <div class="logo">
            <img src="PATH_LOGO" alt="" />
        </div>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('pagina-personaggi')}}">Characters</a>
                </li>
                <li>
                    <a href="{{ route('pagina-fumetti')}}">Comics</a>
                </li>
                <li>
                    <a href="{{ route('pagina-film')}}">Movies</a>
                </li>
                <li>
                    <a href="{{ route('pagina-tv')}}">Tv</a>
                </li>
                <li>
                    <a href="{{ route('pagina-giochi')}}">Games</a>
                </li>
                <li>
                    <a href="{{ route('pagina-collezionabili')}}">Collectibles</a>
                </li>
                <li>
                    <a href="{{ route('pagina-video')}}">Videos</a>
                </li>
                <li>
                    <a href="{{ route('pagina-fan')}}">Fans</a>
                </li>
                <li>
                    <a href="{{ route('pagina-notizie')}}">News</a>
                </li>
                <li>
                    <a href="{{ route('pagina-negozio')}}">Shop</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<style>
    ul {
        list-style: none;
    }
    li {
        display: inline-block;
    }
    li a {
        text-decoration: none;
        color: blue;
    }
</style>
