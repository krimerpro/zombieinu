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

                        <h1 class="best-template animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.5s" style="color:#630E2B;margin-top:20px">Countdown to Qatar 2022</h1>
                        <h5 class="d-block white animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.6s" style="color:#630E2B">As we count down to the start of the global showpiece in Qatar on 20 November, QATAR 2022 Token will be the part of the great NFTs Marketplace in FIFA World Cup history.</h5>
                        <div class="mt-5 text-center">
                          <a href="https://poocoin.app/tokens/0xc00CCB8fEDf83c3CbeC3e375Aa8D58Fe06f4FF4a" class="btn btn-lg btn-gradient-orange btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:#630E2B">Poocoin Chart</a>
                          <a href="https://exchange.pancakeswap.finance/#/swap?inputCurrency=0xc00CCB8fEDf83c3CbeC3e375Aa8D58Fe06f4FF4a" class="btn btn-lg btn-gradient-orange btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:#630E2B">Buy on Pancakeswap</a>
                          <a href="https://t.me/Qatar2022Portal" class="btn btn-lg btn-gradient-orange btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:#630E2B">Official TG</a>
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
            <h2 class="title" style="color:#630E2B">About</h2>
        </div>
    </div>

    <div class="content-area">
        <div class="row" style="margin-top:50px">
          <div class="col-md-4 col-lg-4">
            <image src="{{ asset('images/logo.png') }}" style="width:100%;height:100%">
          </div>
            <div class="col-md-8 col-lg-8" style="margin-top:auto; margin-bottom:auto">
              <span style="color:black; font-size:22px;font-weight:bold">QATAR 2022</span><br/>
              <span style="color:black; font-size:20px">The 2022 FIFA World Cup is scheduled to be the 22nd running of the FIFA World Cup competition, the quadrennial international men's football championship contested by the senior national teams of the member associations of FIFA. It is scheduled to take place in Qatar from 20 November to 18 December 2022. This will be the first World Cup ever to be held in the Arab world</span>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ About -->

<!-- Whitepaper -->
<section id="whitepaper" class="roadmap section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h2 class="title" style="color:#630E2B">Whitepaper</h2>
        </div>
    </div>
    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <img src="{{ asset('images/whitepaper.jpeg') }}" style="width:100%;height:100%;display:block;margin:auto;text-align:center" >
            </div>
        </div>
    </div>

    <div class="clear"></div>

    <div class="row" style="margin:auto;margin-top:15px">
        <div class="col-md-12 col-lg-12 text-center">
            <a href="{{ asset('/documents/whitepaper.pdf') }}" target="_blank" style="color:#630E2B;font-size:16px;margin-top:15px;cursor:pointer;font-weight:bold">Download Whitepaper</a>
        </div>
    </div>
</div>
</section>
<!--/ Whitepaper -->

<!-- Utility -->
<section id="utility" class="roadmap section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h2 class="title" style="color:#630E2B">Utility</h2>
            <h4 class="title" style="color:#630E2B">NFTs Sneakpeek</h4>
        </div>
    </div>
    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
        <div class="row">
            <div class="col-md-4 col-lg-4 text-center">
                <img src="{{ asset('images/nft-1.png') }}" style="width:100%;height:100%" >
            </div>

            <div class="col-md-4 col-lg-4 text-center">
                <img src="{{ asset('images/nft-2.png') }}" style="width:100%;height:100%" >
            </div>

            <div class="col-md-4 col-lg-4 text-center">
                <img src="{{ asset('images/nft-3.png') }}" style="width:100%;height:100%" >
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-lg-4 text-center">
                <img src="{{ asset('images/nft-4.png') }}" style="width:100%;height:100%" >
            </div>

            <div class="col-md-4 col-lg-4 text-center">
                <img src="{{ asset('images/nft-5.png') }}" style="width:100%;height:100%" >
            </div>

            <div class="col-md-4 col-lg-4 text-center">
                <img src="{{ asset('images/nft-6.png') }}" style="width:100%;height:100%" >
            </div>
        </div>
    </div>


    <div class="heading text-center" style="margin-top:250px">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h4 class="title" style="color:#630E2B">NFT Marketplace App</h4>
        </div>
    </div>

    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s" style="margin-top:-50px">
        <div class="row">
            <div class="col-md-6 col-lg-6 text-center">
                <img src="{{ asset('images/marketplace-1.png') }}" style="width:45%;" >
            </div>
            <div class="col-md-6 col-lg-6 text-center">
                <img src="{{ asset('images/marketplace-2.png') }}" style="width:45%;" >
            </div>
        </div>
    </div>

</div>
</section>
<!--/ Utility -->

<!-- Tokenomics -->
<section class="about section-padding" id="tokenomics">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">Tokenomics</h6>
            <h2 class="title" style="color:#630E2B">Tokenomics</h2>
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
            <h2 class="title" style="color:#630E2B">Roadmap</h2>
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
                <a href="{{ asset('/documents/roadmap.pdf') }}" target="_blank" style="color:#630E2B;font-size:16px;margin-top:15px;cursor:pointer;font-weight:bold">Download Roadmap</a>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Roadmap -->

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
