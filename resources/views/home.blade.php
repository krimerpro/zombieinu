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
                         <img src="{{ asset('images/logo.png') }}" style="width:40%;height:40%;border-radius:50%;display: block;margin-left: auto;margin-right: auto">
                      </div>

                        <h1 class="best-template animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.5s" style="color:red;margin-top:20px">KINDER JOY INU</h1>
                        <h5 class="d-block white animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.6s" style="color:grey">Yummy, Entertaining and Unique Snack</h5>
                        <div class="mt-5 text-center">
                            <a href="https://t.me/KinderJoyInu" class="btn btn-lg btn-gradient-orange btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px">Telegram</a>
                            <a href="https://exchange.pancakeswap.finance/#/swap?inputCurrency=0xE7C96Fab317530b4475ee4d0e592e8Ac0E3E662C" class="btn btn-lg btn-gradient-orange btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px">Buy Token</a>
                            <a href="https://poocoin.app/tokens/0xE7C96Fab317530b4475ee4d0e592e8Ac0E3E662C" class="btn btn-lg btn-gradient-orange btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px">Chart</a>
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
            <h2 class="title" style="color:#0047ab">About</h2>
        </div>
    </div>

    <div class="content-area">
        <div class="row" style="margin-top:30px">
            <div class="col-md-4 col-lg-4 text-center">
              <?php
                if($agent->isMobile()){
              ?>
                  <image src="{{ asset('images/logo.png') }}" style="width:50%;">
              <?php
            } else{
              ?>
                  <image src="{{ asset('images/kinderjoy.png') }}" style="width:100%;height:100%">
              <?php
            }
               ?>

            </div>

            <div class="col-md-8 col-lg-8" style="margin-top:auto; margin-bottom:auto">
              <?php
                if($agent->isMobile()){
              ?>
                  <span class="text-center" style="color:black; font-size:auto;font-weight:bold">KINDER JOY</span><br/>
                  <span style="color:black; font-size:auto;">Kinder Joy (formerly known as Kinder Merendero in Italy and Bahrain) is a candy made by Italian confectionery company Ferrero as part of its Kinder brand of products. It has plastic egg-shaped packaging that splits into two; one half contains layers of cocoa and milk cream, and the other half contains a toy and a spoon on top of the wrapper. Kinder Joy was first launched in Italy in 2001 and as of 2018 was sold in 170 countries.</span>
              <?php
            } else{
              ?>
                  <span style="color:black; font-size:22px;font-weight:bold">KINDER JOY</span><br/>
                  <span style="color:black; font-size:20px;">Kinder Joy (formerly known as Kinder Merendero in Italy and Bahrain) is a candy made by Italian confectionery company Ferrero as part of its Kinder brand of products. It has plastic egg-shaped packaging that splits into two; one half contains layers of cocoa and milk cream, and the other half contains a toy and a spoon on top of the wrapper. Kinder Joy was first launched in Italy in 2001 and as of 2018 was sold in 170 countries.</span>
              <?php
            }
               ?>
            </div>
        </div>

        <div class="row" style="margin-top:50px">
            <div class="col-md-8 col-lg-8" style="margin-top:auto; margin-bottom:auto">
              <?php
                if($agent->isMobile()){
              ?>
              <span style="color:black; font-size:auto;font-weight:bold">KINDER JOY INU</span><br/>
              <span style="color:black; font-size:auto">The novel design combines the tastiness of milky and cocoa cream in a sealed package, with the toy in a separate compartment. Great token with great utility in the future!</span>
              <?php
            } else{
              ?>
              <span style="color:black; font-size:22px;font-weight:bold">KINDER JOY INU</span><br/>
              <span style="color:black; font-size:20px">The novel design combines the tastiness of milky and cocoa cream in a sealed package, with the toy in a separate compartment. Great token with great utility in the future!</span>
              <?php
            }
               ?>
            </div>

            <div class="col-md-4 col-lg-4">
              <?php
                if($agent->isMobile()){
                  ?>
                      &nbsp;
                  <?php
                } else{
                  ?>
                      <image src="{{ asset('images/logo.png') }}" style="width:100%;height:100%">
                  <?php
                }
               ?>

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
            <h2 class="title" style="color:red">Tokenomics</h2>
        </div>
    </div>
    <div class="content-area" style="color:blue">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div style="margin-bottom:15px;">
                    <h3 style="font-size:25px" class="text-center">BUY FEES | 4%</h3>
                    <ul style="margin-top:20px; font-size: 17px">
                        <li>
                          <span class="fa fa-check" style="color:blue"></span> Marketing 1%
                        </li>
                        <li style="margin-top:10px">
                          <span class="fa fa-check" style="color:blue"></span> Development 1%
                        </li>
                        <li style="margin-top:10px">
                          <span class="fa fa-check" style="color:blue"></span> Auto Add LP 2%
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div style="margin-bottom:15px;">
                    <h3 style="font-size:25px" class="text-center">SELL FEES | 4%</h3>
                    <ul style="margin-top:20px; font-size: 17px">
                        <li>
                          <span class="fa fa-check" style="color:blue"></span> Marketing 1%
                        </li>
                        <li style="margin-top:10px">
                          <span class="fa fa-check" style="color:blue"></span> Development 1%
                        </li>
                        <li style="margin-top:10px">
                          <span class="fa fa-check" style="color:blue"></span> Auto Add LP 2%
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div style="margin-bottom:15px;">
                    <h3 style="font-size:25px" class="text-center">FEATURES</h3>
                    <ul style="margin-top:20px; font-size: 17px">
                        <li style="margin-top:10px">
                          <span class="fa fa-check" style="color:blue"></span> Verified Contract
                        </li>
                        <li style="margin-top:10px">
                          <span class="fa fa-check" style="color:blue"></span> 100% LP Lock
                        </li>
                        <li style="margin-top:10px">
                          <span class="fa fa-check" style="color:blue"></span> Anti Whale | Max Wallet 4%
                        </li>
                        <li style="margin-top:10px">
                          <span class="fa fa-check" style="color:blue"></span> Anti Dump | Max Tx 4%
                        </li>
                    </ul>
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
            <h2 class="title" style="color:red">Roadmap</h2>
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
            <h2 class="title" style="color:red">Whitepaper</h2>
        </div>
    </div>
    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
        <div class="row">
            <div class="col-md-12 col-lg-12 text-center">
                <img src="{{ asset('images/whitepaper.png') }}" style="width:100%;height:100%" >
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
