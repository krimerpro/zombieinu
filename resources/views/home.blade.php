@extends('layouts.default')
@section('content')

<div class="wrapper wow" >
  <div id="big-text" class="wow bounceInDown" data-wow-delay="4s">
    <h1>ZOMBIE INU</h1>
    <p>
        Next generation of meme token on BSC!
    </p>
    <a class="le-btn" href="https://t.me/ZombieInuPortal" >Join Us</a>
    <a class="le-btn" href="https://poocoin.app/tokens/0x32398D43CeF225170B3163582793Ee98F0103371" >Chart</a>
    <a class="le-btn" href="https://pancakeswap.finance/swap?outputCurrency=0x32398D43CeF225170B3163582793Ee98F0103371" >Buy $ZOMBIE</a>
    <br/>
    <p>Total Supply : 100,000,000 $ZOMBIE</p>
    <p>Tax : 5/5</p>
    <p>Max : 4/4</p>
  </div>

  <div id="texture" class="bg-image"  data-bg-image="{{ asset('images/texture.png') }}" ></div>
  <div id="clouds"  ></div>
  <div id="hole" class="wow bounceInUp" data-wow-delay="3s"></div>
   <div id="moon" class="wow bounceInUp" data-wow-delay="2s"></div>
  <div id="hand" class="wow bounceInUp" data-wow-delay="3.5s">
    <div class="text">
      ZOMBIE<br>
      INU <br>
      $ZOMBIE
              </div>
  </div>
  <div id="grass" class="wow bounceInUp" data-wow-delay="1s"></div>
  <div id="grass2" class="wow bounceInUp" data-wow-delay="1.5s" ></div>
</div>

<a class="goto-top" href="#gotop"></a>

<script src="{{ asset('js/jquery-1.9.0.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-1.4.1.min.js') }}"></script>



<script type="text/javascript" src="{{ asset('js/plax.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/fontsmoothie.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.spritely.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@stop
