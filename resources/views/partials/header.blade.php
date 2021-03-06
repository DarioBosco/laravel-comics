<header>
    <div class="container">
        <div class="logo">
            <a href="{{ route('pagina-home')}}"> <img src="./img/dc-logo.png" alt="Logo DC" /> </a>
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
    header ul {
        list-style: none;
    }
    header ul li {
        display: inline-block;
    }
    header ul li a {
        text-decoration: none;
        color: blue;
    }
</style>
