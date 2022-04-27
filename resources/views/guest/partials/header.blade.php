<header>
    <div class="container">
        <a href="{{route('home')}}"><img src="./images/dc-logo.png" alt="logo" /></a>
        <ul>
          <li class="{{ Route::current()->getName() == 'characters' ? 'active' : '' }} "><a href="{{route('characters')}}">characters</a></li>
          <li class="{{ Route::current()->getName() == 'comics' ? 'active' : '' }} "><a href="{{route('comics')}}">comics</a></li>
          <li class="{{ Route::current()->getName() == 'movies' ? 'active' : '' }} "><a href="{{route('movies')}}">movies</a></li>
          <li class="{{ Route::current()->getName() == 'tv' ? 'active' : '' }} "><a href="{{route('tv')}}">tv</a></li>
          <li class="{{ Route::current()->getName() == 'games' ? 'active' : '' }} "><a href="{{route('games')}}">games</a></li>
          <li class="{{ Route::current()->getName() == 'collectibles' ? 'active' : '' }} "><a href="{{route('collectibles')}}">collectibles</a></li>
          <li class="{{ Route::current()->getName() == 'videos' ? 'active' : '' }} "><a href="{{route('videos')}}">videos</a></li>
          <li class="{{ Route::current()->getName() == 'fans' ? 'active' : '' }} "><a href="{{route('fans')}}">fans</a></li>
          <li class="{{ Route::current()->getName() == 'news' ? 'active' : '' }} "><a href="{{route('news')}}">news</a></li>
          <li class="{{ Route::current()->getName() == 'shop' ? 'active' : '' }} "><a href="{{route('shop')}}">shop</a></li>
        </ul>
    </div>
</header>