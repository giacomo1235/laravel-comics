<footer>
    <div class="main-footer">
      <div class="col-left">
        <div class="col-4">
          <ul id="dcComics">
          @php
            $arrLinks = config('footermenu')   
          @endphp  
          @foreach ($arrLinks as $link)
          {{-- @dd($link) --}}
          <ul>
            <li class="title-li">dc comics</li>
            @foreach ($link['linkComics'] as $item)
            <li><a href="{{$item['href']}}">{{$item['text']}}</a></li>   
            @endforeach
          </ul>
    
          @endforeach
          {{-- @dd($arrLinks) --}}
          {{-- <li class="title-li">dc comics</li>
          <li><a href="#!">Characters</a></li>
          <li><a href="#!">Comics</a></li>
          <li><a href="#!">Movies</a></li>
          <li><a href="#!">Tv</a></li>
          <li><a href="#!">Games</a></li>
          <li><a href="#!">Collectibles</a></li>
          <li><a href="#!">Videos</a></li>
          <li><a href="#!">News</a></li> --}}
        </ul>
        <ul id="shop">
          @foreach ($arrLinks as $link)
          <ul>
            <li class="title-li">shop</li>
            @foreach ($link['linksShop'] as $item)
            <li><a href="{{$item['href']}}">{{$item['text']}}</a></li>   
            @endforeach
          </ul>
          @endforeach
        </ul>
        </div>
        <div class="col-4">
          <ul class="dc">
            @foreach ($arrLinks as $link)
            <ul>
              <li class="title-li">dc</li>
              @foreach ($link['linksDc'] as $item)
              <li><a href="{{$item['href']}}">{{$item['text']}}</a></li>   
              @endforeach
            </ul>
            @endforeach
        </ul>
        </div>
        <div class="col-4">
          <ul class="sites">
            @foreach ($arrLinks as $link)
            <ul>
              <li class="title-li">sites</li>
              @foreach ($link['linksSites'] as $item)
              <li><a href="{{$item['href']}}">{{$item['text']}}</a></li>   
              @endforeach
            </ul>
            @endforeach
        </ul>
        </div>
      </div>
      <div class="col-right">
        <img src="./images/dc-logo-bg.png" alt="">
      </div>
    </div>
    <div class="footer-social">
      <div class="col-left">
        <button>sign-up now!</button>
      </div>
      <div class="col-right">
        <ul class="social-logos">
          <li><a href="#!">follow us</a></li>
          <li><a href="#!"><img src="./images/footer-twitter.png" alt=""></a></li>
          <li><a href="#!"><img src="./images/footer-twitter.png" alt=""></a></li>
          <li><a href="#!"><img src="./images/footer-youtube.png" alt=""></a></li>
          <li><a href="#!"><img src="./images/footer-pinterest.png" alt=""></a></li>
          <li><a href="#!"><img src="./images/footer-periscope.png" alt=""></a></li>
        </ul>
      </div>

    </div>
</footer>