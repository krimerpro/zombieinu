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

                        <h1 class="best-template animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.5s" style="color:white;margin-top:20px">Smart advertising for the crypto industry</h1>
                        <h5 class="d-block white animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.6s" style="color:white">We are creating products that combine cutting-edge technologies for a better now</h5>
                        <div class="mt-5 text-center">
                          <a href="{{ asset('/documents/whitepaper.pdf') }}" class="btn btn-lg btn-gradient-blue btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;">WHITEPAPER</a>
                          <a href="https://t.me/XProtocolPortal" class="btn btn-lg btn-gradient-blue btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;">TG OFFICIAL</a>
                          <a href="https://poocoin.app/tokens/0x5958e8c0c92440cf654691056947f16003f0275b" class="btn btn-lg btn-gradient-blue btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;">CHART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Header: 3D Animation -->

<!-- Utility -->
<section id="utility" class="roadmap section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h2 class="title" style="color:white">Upcoming Utility</h2>
        </div>
    </div>
    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
        <div class="row">
            <div class="col-md-12 col-lg-12 text-center">
                <img src="{{ asset('images/product.png') }}" style="width:45%;" >
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
            <h2 class="title" style="color:white">Tokenomics</h2>
        </div>
    </div>
    <div class="content-area" style="color:#ffffff">
        <div class="row">
            <div class="col-md-12 col-lg-12 text-center">
                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Token Symbol</h3>
                    <h4 style="font-size:24px">XPT</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Max Supply</h3>
                    <h4 style="font-size:24px">1.000.000.000</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Decimals</h3>
                    <h4 style="font-size:24px">9</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Tax</h3>
                    <h4 style="font-size:24px">4% Buy | 4% Sell</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Max Wallet</h3>
                    <h4 style="font-size:24px">4%</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Max Tx</h3>
                    <h4 style="font-size:24px">4%</h4>
                </div>

                <div style="margin-bottom:15px;">
                    <h3 style="font-size:16px">Initial LP</h3>
                    <h4 style="font-size:24px">2 BNB + 96% Total Supply</h4>
                </div>
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
            <h2 class="title" style="color:white">Roadmap</h2>
        </div>
    </div>
    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <img src="{{ asset('images/roadmap.png') }}" style="width:100%;height:100%" >
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
