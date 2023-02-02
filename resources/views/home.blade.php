@extends('layouts.default')
@section('content')

<!-- //////////////////////////////////// CONTAINER ////////////////////////////////////-->
<div class="content-wrapper">
  <div class="content-body">
    <main><!-- Header: 3D Animation -->
        <section class="head-area" id="head-area">
            <div class="head-content d-flex align-items-center">
                <div class="container">
                  <div class="banner-wrapper">
                        <div class="row align-items-right">
                            <div class="col-lg-12 col-md-12">
                                <div class="banner-content">
                                  <div id="svg-animation">
                                     <img src="{{ asset('images/logo.png') }}" style="width:40%;height:40%;display: block;margin-left: auto;margin-right: auto">
                                  </div>

                                    <h1 class="best-template animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.5s" style="color:purple;margin-top:20px">Imori are the ghosts of dead warriors transformed into geckos. They haunt the forgotten, overgrown ruins where they lost their lives, attacking and harassing trespassers.</h1>
                                    <h5 class="d-block white animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.6s" style="color:purple">Imori NFTs will be ready for minting soon</h5>
                                    <div class="mt-5 text-center">
                                      <a href="https://medium.com/@DavidWilliamEx/imori-%E5%AE%88%E5%AE%AE-187b86da13eb" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;">MEDIUM</a>
                                      <a href="https://t.me/ImoriProjectErc20" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;">Official Group</a><br/>
                                      <a href="https://www.dextools.io/app/en/ether/pair-explorer/0x75c73288b7f7328a83ebbd41965871c4ac83753f" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;">DEXTOOLS CHART</a>
                                      <a href="https://twitter.com/ImoriProject" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;">TWITTER</a>
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
        <section id="nfts" class="roadmap section-padding">
            <div class="container">
                <div class="heading text-center">
                    <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                        <h2 class="title" style="color:purple">Upcoming NFTs</h2>
                    </div>
                </div>
                <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 text-center">
                            <img src="{{ asset('images/nfts.png') }}" style="width:100%">
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
                        <h2 class="title" style="color:purple">Tokenomics</h2>
                    </div>
                </div>
                <div class="content-area" style="color:#purple">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 text-center">
                            <div style="margin-bottom:15px;border-bottom-style: solid;">
                                <h3 style="font-size:16px">Ticker</h3>
                                <h4 style="font-size:24px;color:purple">Imori</h4>
                            </div>

                            <div style="margin-bottom:15px;border-bottom-style: solid;">
                                <h3 style="font-size:16px">Max Supply</h3>
                                <h4 style="font-size:24px;color:purple">8.000.000</h4>
                            </div>

                            <div style="margin-bottom:15px;border-bottom-style: solid;">
                                <h3 style="font-size:16px">Decimals</h3>
                                <h4 style="font-size:24px;color:purple">9</h4>
                            </div>

                        </div>

                        <div class="col-md-6 col-lg-6 text-center">

                            <div style="margin-bottom:15px;border-bottom-style: solid;">
                                <h3 style="font-size:16px">Tax</h3>
                                <h4 style="font-size:24px;color:purple">4% Buy | 4% Sell</h4>
                            </div>

                            <div style="margin-bottom:15px;border-bottom-style: solid;">
                                <h3 style="font-size:16px">Max Wallet</h3>
                                <h4 style="font-size:24px;color:purple">4%</h4>
                            </div>

                            <div style="margin-bottom:15px;border-bottom-style: solid;">
                                <h3 style="font-size:16px">Max Tx</h3>
                                <h4 style="font-size:24px;color:purple">4%</h4>
                            </div>

                        </div>

                        <div class="col-md-12 col-lg-12 text-center">
                          <div style="margin-bottom:15px;">
                              <h3 style="font-size:16px">Initial LP</h3>
                              <h4 style="font-size:24px;color:purple">1 WETH</h4>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Tokenonmics -->

    </main>
  </div>
</div>
<!-- //////////////////////////////////// FOOTER ////////////////////////////////////-->

@stop
