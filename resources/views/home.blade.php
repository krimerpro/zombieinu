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
              <div class="col-lg-6 col-md-12  move-first">
                  <div id="svg-animation">
                      <img src="{{ asset('images/logo.png') }}" style="width:100%;height:100%;border-radius:50%;display: block;margin-left: auto;margin-right: auto;">
                  </div>
              </div>

                <div class="col-lg-6 col-md-12">
                    <div class="banner-content pt-5">
                        <h1 class="best-template animated" data-animation="fadeInUpShorter" data-animation-delay="1.5s" style="color:green">SHIBA KING COIN</h1>
                        <h3 class="d-block white animated" data-animation="fadeInUpShorter" data-animation-delay="1.6s" style="color:green">Shiba King Coin is a decentralized,transparent and reliable meme token!</h3>
                        <div class="mt-5">
                            <a href="https://bscscan.com/token/0x1bfAf663b20f328D48D8B1Dd73BC94f93FdB8B4B" target="_blank" class="btn btn-lg btn-gradient-purple btn-glow mr-4 mb-2 animated" data-animation="fadeInUpShorter" data-animation-delay="1.7s" style="background:green">Token Info</a>
                            <a href="https://t.me/ShibaKingCoin" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="background:green">Telegram</a>
                            <a href="https://poocoin.app/tokens/0x1bfAf663b20f328D48D8B1Dd73BC94f93FdB8B4B" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="background:green;margin-left: 25px">Chart</a>
                        </div>
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
            <h2 class="title" style="color:green">Tokenomics</h2>
        </div>
    </div>
    <div class="content-area" style="color:green">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Token Symbol</h3>
                    <h4 style="font-size:24px; color:green">SKC</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Max Supply</h3>
                    <h4 style="font-size:24px; color:green">1.000.000.000</h4>
                </div>

                <div style="margin-bottom:15px;">
                    <h3 style="font-size:16px">Decimals</h3>
                    <h4 style="font-size:24px; color:green">9</h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Tax</h3>
                    <h4 style="font-size:24px; color:green">4% Buy | 4% Sell</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px; color:green">Max Wallet</h3>
                    <h4 style="font-size:24px; color:green">3%</h4>
                </div>

                <div style="margin-bottom:15px;">
                    <h3 style="font-size:16px; color:green">Max Tx</h3>
                    <h4 style="font-size:24px; color:green">3%</h4>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-md-12 col-lg-12">
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
                            <input type="text" value="0x1bfAf663b20f328D48D8B1Dd73BC94f93FdB8B4B" id="smartcontractaddress" readonly style="width:100%;text-align:center;color:green;background:none;border:none" />
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
                <img src="{{ asset('images/roadmap.png') }}" style="width:100%;height:100%" >
            </div>
        </div>

        <div class="clear"></div>

        <div class="row" style="margin:auto;margin-top:15px">
            <div class="col-md-12 col-lg-12">
                <a href="{{ asset('/documents/roadmap.pdf') }}" target="_blank" style="color:green;font-size:16px;margin-top:15px;cursor:pointer;font-weight:bold">Download Roadmap</a>
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
