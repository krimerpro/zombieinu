@extends('layouts.default')
@section('content')

<!-- //////////////////////////////////// CONTAINER ////////////////////////////////////-->
<div class="content-wrapper">
  <div class="content-body">
    <main><!-- Header: 3D Animation -->
<section class="head-area" id="head-area">
<div id="particles-js"></div>
<div class="head-content d-flex align-items-center">
    <div class="container">
        <div class="banner-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="banner-content pt-5">
                        <h1 class="best-template animated" data-animation="fadeInUpShorter" data-animation-delay="1.5s">WINCAT Token</h1>
                        <h3 class="d-block white animated" data-animation="fadeInUpShorter" data-animation-delay="1.6s">The Next Generation of NFT Marketplace</h3>
                        <div class="mt-5">
                            <a href="https://exchange.pancakeswap.finance/#/swap?inputCurrency=0xd8e9d1183cde925d292586d699fa34848107830a" target="_blank" class="btn btn-lg btn-gradient-purple btn-glow mr-4 mb-2 animated" data-animation="fadeInUpShorter" data-animation-delay="1.7s">Buy on PancakeSwap</a>
                            <a href="https://bscscan.com/token/0xd8e9d1183cde925d292586d699fa34848107830a#balances" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s">BscScan Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 move-first">
                    <div id="svg-animation">
                        <img src="{{ asset('images/logo.jpeg') }}" style="width:75%;height:75%;border-radius:50%;display: block;margin-left: auto;margin-right: auto;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Header: 3D Animation -->

<!-- Tokenomics -->
<section class="about section-padding" id="tokenomics">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">Tokenomics</h6>
            <h2 class="title">Tokenomics</h2>
        </div>
    </div>
    <div class="content-area" style="color:#ffffff">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Token Symbol</h3>
                    <h4 style="font-size:24px">WINCAT</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Max Supply</h3>
                    <h4 style="font-size:24px">1 Quadrillion</h4>
                </div>

                <div style="margin-bottom:15px;">
                    <h3 style="font-size:16px">Decimals</h3>
                    <h4 style="font-size:24px">18</h4>
                </div>
            </div>

            <div class="col-md-8 col-lg-8">
                <div style="margin-bottom:15px">
                    <p style="color:#ffffff;text-align:center">Total WINCAT Token Will be burn 650 Trillion tokens</p>

                    <div class="row">
                      <div class="col-md-1 col-lg-1">&nbsp;</div>

                      <div class="col-md-5 col-lg-5">
                          <p style="color:#ffffff">Initial Burn 200 Trillion tokens</p>
                          <p style="color:#ffffff">5K Holders Burn 50 Trillion tokens</p>
                          <p style="color:#ffffff">10K Holders Burn 100 Trillion tokens</p>
                      </div>

                      <div class="col-md-5 col-lg-5">
                          <p style="color:#ffffff">20K Holders Burn 100 Trillion tokens</p>
                          <p style="color:#ffffff">30K Holders Burn 100 Trillion tokens</p>
                          <p style="color:#ffffff">50K Holders Burn 100 Trillion tokens</p>
                      </div>

                      <div class="col-md-1 col-lg-1">&nbsp;</div>
                  </div>

                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-md-4 col-lg-4">&nbsp;</div>

          <div class="col-md-8 col-lg-8">
              <div style="text-align:center">
                  <h3 style="font-size:16px;">Smart Contract | BSC</h3>
              </div>

              <div class="row" style="border:dashed;">
                <div class="col-md-1 col-lg-1">&nbsp;</div>
                  <div class="col-md-2 col-lg-2" style="text-align:center;margin:auto">
                      <img src="{{ asset('images/bsc-logo.svg') }}" style="height:75px">
                  </div>

                  <div class="col-md-9 col-lg-9">

                      <div style="-webkit-box-shadow: 0px 28px 28px -24px rgb(56 62 86 / 25%);box-shadow: 0px 28px 28px -24px rgb(56 62 86 / 25%);border-radius: 12px;padding: 16px 20px;text-decoration: none !important;display: block;">
                          <div class="text-center">
                            <input type="text" value="0xd8e9d1183cde925d292586d699fa34848107830a" id="smartcontractaddress" readonly style="width:100%;text-align:center;color:#ffffff;background:none;border:none" />
                          </div>
                          <button type="button" style="cursor: pointer;border-radius:15px;width:100%" class="btn btn-primary" onclick="copyContract()">
                              <span class="fa fa-copy"></span>
                              Copy
                          </button>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
</div>
</section>
<!--/ Tokenonmics -->

<!-- About -->
<section class="about section-padding" id="about">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">About</h6>
            <h2 class="title">About</h2>
        </div>
    </div>

    <div class="content-area">
        <div class="row">
            <div class="col-md-4 col-lg-4" style="border-right:solid;color:#ffffff">
                <p style="color:#ffffff">Do you know why this waving cat statue is widely displayed in business premises</p>
                <p style="color:#ffffff">Well, a little review, this waving cat statue is familiarly called maneki neko, in Japanese it</p>
            </div>

            <div class="col-md-4 col-lg-4" style="border-right:solid;color:#ffffff">
                <p style="color:#ffffff">This is where our inspiration to name our token WINCAT makes the cat of victory after the token's name</p>
                <p style="color:#ffffff">We makes this motivation so that every holder can enjoy the profit from the name of this token</p>
                <p style="color:#ffffff">NFT's (non fungible tokens) are a special type of cryptographic token which represents something unique; non-fungible tokens are thus not mutually interchangeable. We choose Win Cats for our platform because they are unique as NFTs.</p>
            </div>

            <div class="col-md-4 col-lg-4">
                <p style="color:#ffffff">On our website, anyone can make their own work or art and enter it into our NFT marketplace to be traded using WINCAT tokens</p>
                <p style="color:#ffffff">This is the future for those of you who have a hobby or do work in the arts</p>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ About -->

<!-- Whitepaper -->
<section id="whitepaper" class="whitepaper section-padding">
<div class="container">
    <div class="heading text-center">
        <h6 class="sub-title">Whitepaper</h6>
        <h2 class="title">Whitepaper</h2>
    </div>
    <div class="row">
        <div class="col-lg-5 col-md-12">
            <div style="background:#ffffff;text-align:center;padding:20px">
                <a href="{{ asset('/documents/whitepaper.pdf') }}" target="_blank" style="margin: auto">
                    <img src="{{ asset('/images/whitepaper.jpeg') }}" >
                    <br>
                    View Whitepaper
                </a>
            </div>
        </div>
        <div class="col-lg-7 col-md-12">
            <div class="content-area">
                <h4 class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s">Read Whitepaper</h4>
                <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">A white paper is an authoritative report or guide that informs readers concisely about a complex issue and presents the issuing body's philosophy on the matter. It is meant to help readers understand an issue, solve a problem, or make a decision.</p>
                <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.8s">Since the early 1990s, the term "white paper", or "whitepaper", has been applied to documents used as marketing or sales tools in business.</p>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Whitepaper -->

<!-- Roadmap -->
<section id="roadmap" class="roadmap section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">Roadmap</h6>
            <h2 class="title">Roadmap</h2>
        </div>
    </div>
    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <img src="{{ asset('images/roadmap.jpeg') }}" style="width:100%;height:100%" >
            </div>
        </div>

        <div class="clear"></div>

        <div class="row" style="margin:auto;margin-top:15px">
            <div class="col-md-12 col-lg-12">
                <a href="{{ asset('/documents/roadmap.pdf') }}" target="_blank" style="color:#ffffff;font-size:16px;margin-top:15px;cursor:pointer">Download Roadmap</a>
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
