@extends('layouts.default')
@section('content')

<!-- //////////////////////////////////// CONTAINER ////////////////////////////////////-->
<div class="content-wrapper">
  <div class="content-body">
    <main><!-- Header: 3D Animation -->
<section class="head-area" id="head-area">
<div></div>
<div class="head-content d-flex align-items-center">
    <div class="container">
      <div class="banner-wrapper">

            <div class="row align-items-right">
                <div class="col-lg-12 col-md-12">
                    <div class="banner-content">
                      <div id="svg-animation">
                         <img src="{{ asset('images/logo.png') }}" style="width:40%;height:40%;display: block;margin-left: auto;margin-right: auto">
                      </div>

                        <h1 class="best-template animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.5s" style="color:orange;margin-top:20px">GARUDA FIFA COMMUNITY TOKEN</h1>
                        <h5 class="d-block white animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.6s" style="color:grey">LOCAL PRODUCT, GOES TO GLOBAL</h5>
                        <div class="mt-5 text-center">
                          <a href="https://exchange.pancakeswap.finance/#/swap?inputCurrency=" class="btn btn-lg btn-gradient-orange btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:black">Buy Token</a>
                            <a href="https://t.me/GarudaFifa" class="btn btn-lg btn-gradient-orange btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:black">Telegram</a>
                            <a href="https://poocoin.app/tokens/" class="btn btn-lg btn-gradient-orange btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:black">Chart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Header: 3D Animation -->

<!-- About -->
<section class="about section-padding" id="about">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h2 class="title" style="color:orange">About</h2>
        </div>
    </div>

    <div class="content-area">
        <div class="row" style="margin-top:50px">
            <div class="col-md-8 col-lg-8" style="margin-top:auto; margin-bottom:auto">
              <span style="color:black; font-size:22px;font-weight:bold">Garuda Fifa</span><br/>
              <span style="color:black; font-size:20px">First Garuda token for the World Cup on Binance Smart Chain. Great utility will be coming soon!</span>
            </div>

            <div class="col-md-4 col-lg-4">
              <image src="{{ asset('images/logo.png') }}" style="width:100%;height:100%">

            </div>
        </div>
    </div>
</div>
</section>
<!--/ About -->

<!-- Tokenomics -->
<section class="about section-padding" id="tokenomics">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">Tokenomics</h6>
            <h2 class="title" style="color:orange">Tokenomics</h2>
        </div>
    </div>
    <div class="content-area" style="color:blue">
        <div class="row">
          <div class="col-md-12 col-lg-12">
              <img src="{{ asset('images/tokenomic.png') }}" style="width:100%;height:100%" >
          </div>
        </div>
    </div>
</div>
</section>
<!--/ Tokenonmics -->

<!-- Roadmap -->
<section id="roadmap" class="roadmap section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h2 class="title" style="color:orange">Roadmap</h2>
        </div>
    </div>
    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <img src="{{ asset('images/roadmap.png') }}" style="width:100%;height:100%" >
            </div>
        </div>

        <div class="clear"></div>

        <div class="row" style="margin:auto;margin-top:15px">
            <div class="col-md-12 col-lg-12">
                <a href="{{ asset('/documents/roadmap.pdf') }}" target="_blank" style="color:blue;font-size:16px;margin-top:15px;cursor:pointer;font-weight:bold">Download Roadmap as PDF</a>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Roadmap -->

<!-- Whitepaper -->
<section id="whitepaper" class="roadmap section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h2 class="title" style="color:orange">Whitepaper</h2>
        </div>
    </div>
    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
        <div class="row">
            <div class="col-md-12 col-lg-12 text-center">
                <img src="{{ asset('images/coming_soon.png') }}" style="width:100%;height:100%" >
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Roadmap -->

<!-- Prototype -->
<section id="prototype" class="roadmap section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h2 class="title" style="color:orange">App</h2>
            <h4 class="title" style="color:orange">Upcoming NFTs Marketplace</h4>
        </div>
    </div>
    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
        <div class="row" style="display:block; margin:auto;">
            <div class="col-md-12 col-lg-12 text-center">
                <img src="{{ asset('images/marketplace.jpeg') }}" style="width:100%;height:100%" >
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Prototype -->

    </main>
  </div>
</div>
<!-- //////////////////////////////////// FOOTER ////////////////////////////////////-->

<script type="text/javascript">

  function copyContract() {
    var copyText = document.getElementById("smartcontractaddress");

    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    document.execCommand("copy");

    alert("Text copied to clipboard");
  }

</script>

@stop
