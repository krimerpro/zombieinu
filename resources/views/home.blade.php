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

                        <h1 class="best-template animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.5s" style="color:#0047ab;margin-top:20px">SUPER SHIBA CHAIN</h1>
                        <h5 class="d-block white animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.6s" style="color:grey">Super Shiba Chain is a decentralized public blockchain and cryptocurrency project and is fully open source. Super Shiba Chain is developing a smart contract platform</h5>
                        <div class="mt-5 text-center">
                            <a href="https://poocoin.app/tokens/" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="background:#0047ab;margin-left: 25px">Chart</a>
                            <a href="https://exchange.pancakeswap.finance/#/swap?inputCurrency=" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="background:#0047ab;margin-left: 25px">Buy Token</a>
                            <a href="https://t.me/SuperShibaChain" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="background:#0047ab;margin-left: 25px">Telegram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
          if(!$agent->isMobile()){
        ?>
        <div class="row" style="margin-top:100px">
          <div class="col-lg-4 col-md-4 text-center">
              <div>
                  <image src="{{ asset('images/icon-service-1.png') }}" style="width:25%;height:25%">
              </div>

              <div style="margin-top:20px">
                  <span style="font-weight:bold">DECENTRALISED SYSTEM</span>
              </div>

              <div style="margin-top:20px">
                  <span>A technical failure can paralyze all affiliate networks on a centralized platfotrm, until the cause is detected and rectified the system.</span>
              </div>
          </div>

          <div class="col-lg-4 col-md-4 text-center">
              <div>
                  <image src="{{ asset('images/icon-service-2.png') }}" style="width:25%;height:25%">
              </div>

              <div style="margin-top:20px">
                  <span style="font-weight:bold">BANKS PAYMENT SYSTEMS</span>
              </div>

              <div style="margin-top:20px">
                  <span>Up to 45% of a merchant’s budget is spent on commissions charged by a number of brokers, including banks, payment systems.</span>
              </div>
          </div>

          <div class="col-lg-4 col-md-4 text-center">
              <div>
                  <image src="{{ asset('images/icon-service-3.png') }}" style="width:25%;height:25%">
              </div>

              <div style="margin-top:20px">
                  <span style="font-weight:bold">CPA NETWORKS</span>
              </div>

              <div style="margin-top:20px">
                  <span>Affiliate networks have to pay for using existing platforms on a monthly basis or spend money on developing proprietary platforms</span>
              </div>
          </div>
        </div>
      <?php } ?>
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
      <?php
        if($agent->isMobile()){
      ?>
      <div class="row" style="margin-top:100px">
        <div class="col-lg-4 col-md-4 text-center">
            <div>
                <image src="{{ asset('images/icon-service-1.png') }}" style="width:25%;height:25%">
            </div>

            <div style="margin-top:20px">
                <span style="font-weight:bold">DECENTRALISED SYSTEM</span>
            </div>

            <div style="margin-top:20px">
                <span>A technical failure can paralyze all affiliate networks on a centralized platfotrm, until the cause is detected and rectified the system.</span>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 text-center" style="margin-top:30px">
            <div>
                <image src="{{ asset('images/icon-service-2.png') }}" style="width:25%;height:25%">
            </div>

            <div style="margin-top:20px">
                <span style="font-weight:bold">BANKS PAYMENT SYSTEMS</span>
            </div>

            <div style="margin-top:20px">
                <span>Up to 45% of a merchant’s budget is spent on commissions charged by a number of brokers, including banks, payment systems.</span>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 text-center"  style="margin-top:30px">
            <div>
                <image src="{{ asset('images/icon-service-3.png') }}" style="width:25%;height:25%">
            </div>

            <div style="margin-top:20px">
                <span style="font-weight:bold">CPA NETWORKS</span>
            </div>

            <div style="margin-top:20px">
                <span>Affiliate networks have to pay for using existing platforms on a monthly basis or spend money on developing proprietary platforms</span>
            </div>
        </div>
      </div>
<?php } ?>
        <div class="row" style="margin-top:30px">
            <div class="col-md-4 col-lg-4">
                <image src="{{ asset('images/service-image-1.png') }}" style="width:100%;height:100%">
            </div>

            <div class="col-md-8 col-lg-8" style="margin-top:auto; margin-bottom:auto">
                <span style="color:black; font-size:22px;font-weight:bold">Meet Super Shiba Chain System</span><br/>
                <span style="color:black; font-size:20px;">Super Shiba Chain connects banks, payment providers, digital asset exchanges and corporates via Cryptro to provide one frictionless experience to send money globally.</span>

                <ul style="margin-top:20px; font-size: 17px">
                    <li>
                      <span class="fa fa-list" style="color:blue"></span> Connectivity across payments networks
                    </li>
                    <li style="margin-top:10px">
                      <span class="fa fa-list" style="color:blue"></span> Instant, on-demand settlement
                    </li>
                    <li style="margin-top:10px">
                      <span class="fa fa-list" style="color:blue"></span> Low operational and liquidity costs
                    </li>
                </ul>
            </div>
        </div>

        <div class="row" style="margin-top:50px">
            <div class="col-md-8 col-lg-8" style="margin-top:auto; margin-bottom:auto">
              <span style="color:black; font-size:22px;font-weight:bold">Privacy Is Priority</span><br/>
              <span style="color:black; font-size:20px">Protect your financial information. PrivateSend ensures your activity history and balances are private. ecurity you can count on. Transactions are confirmed by 200 TerraHash of X11 ASIC computing power and over 4,500 servers hosted around the world.</span>

              <ul style="margin-top:20px; font-size: 17px">
                  <li>
                    <span class="fa fa-list" style="color:blue"></span> Real-time traceability of funds
                  </li>
              </ul>
            </div>

            <div class="col-md-4 col-lg-4">
                <image src="{{ asset('images/service-image-2-400x321.png') }}" style="width:100%;height:100%">
            </div>
        </div>

        <div class="row" style="margin-top:50px">
          <?php
            if($agent->isMobile()){
          ?>
                  <div class="row" style="margin-top:100px">
                    <div class="col-lg-4 col-md-4 text-center">
                        <div>
                            <image src="{{ asset('images/feature-1.png') }}" style="width:25%;height:25%">
                        </div>

                        <div style="margin-top:20px">
                            <span style="font-weight:bold">HIGH SPEED AND LOW COSTS</span>
                        </div>

                        <div style="margin-top:20px">
                            <span>Immediate funding without third-parties. Smart contracts autonomously perform funding – collect and release payments</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 text-center" style="margin-top:50px">
                        <div>
                            <image src="{{ asset('images/feature-2.png') }}" style="width:25%;height:25%">
                        </div>

                        <div style="margin-top:20px">
                            <span style="font-weight:bold">NO MORE MIDDLE MEN</span>
                        </div>

                        <div style="margin-top:20px">
                            <span>Anyone can join or leave the network as they please without disrupting the network’s ability to form consensus on transactions</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 text-center" style="margin-top:50px">
                        <div>
                            <image src="{{ asset('images/feature-3.png') }}" style="width:25%;height:25%">
                        </div>

                        <div style="margin-top:20px">
                            <span style="font-weight:bold">FAIR DEALS ONLY</span>
                        </div>

                        <div style="margin-top:20px">
                            <span>Open-source smart contract ensures fair and transparent deals between merchants and affiliates</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 text-center" style="margin-top:50px">
                        <div>
                            <image src="{{ asset('images/feature-4.png') }}" style="width:25%;height:25%">
                        </div>

                        <div style="margin-top:20px">
                            <span style="font-weight:bold">EASY ENTRY AND FAIR COMPETITION</span>
                        </div>

                        <div style="margin-top:20px">
                            <span>Taking a dynamic and reflexive perspective on the interaction between technology, law, and economics</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 text-center" style="margin-top:50px">
                        <div>
                            <image src="{{ asset('images/feature-5.png') }}" style="width:25%;height:25%">
                        </div>

                        <div style="margin-top:20px">
                            <span style="font-weight:bold">PROTECTION FROM HACKING</span>
                        </div>

                        <div style="margin-top:20px">
                            <span>On a decentralized platform, all user accounts are independent; if one account is hacked, this won’t breach the security of</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 text-center" style="margin-top:50px">
                        <div>
                            <image src="{{ asset('images/feature-6.png') }}" style="width:25%;height:25%">
                        </div>

                        <div style="margin-top:20px">
                            <span style="font-weight:bold">GLOBAL P2P TRADE FINANCING</span>
                        </div>

                        <div style="margin-top:20px">
                            <span>Peer-to-peer business transaction mechanism based on blockchain technology is developed and explained</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 text-center" style="margin-top:50px">
                        <div>
                            <image src="{{ asset('images/feature-7.png') }}" style="width:25%;height:25%">
                        </div>

                        <div style="margin-top:20px">
                            <span style="font-weight:bold">COST EFFECTIVE</span>
                        </div>

                        <div style="margin-top:20px">
                            <span>Scale economy through decentralization leading to significant decrease in transaction fees</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 text-center" style="margin-top:50px">
                        <div>
                            <image src="{{ asset('images/feature-8.png') }}" style="width:25%;height:25%">
                        </div>

                        <div style="margin-top:20px">
                            <span style="font-weight:bold">REAL-TIME DATABASE</span>
                        </div>

                        <div style="margin-top:20px">
                            <span>Blockchain technology can be considered as one of the main drivers to achieve a substantial cost saving in real time database</span>
                        </div>
                    </div>
                  </div>
                </div>

            <?php
          } else{
          ?>
          <div class="row" >
              <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3">
                          <image src="{{ asset('images/feature-1.png') }}" style="width:100%;height:100%">
                      </div>

                      <div class="col-lg-9 col-md-9 col-sm-9" style="margin-top:auto;margin-bottom:auto">
                        <div class="row" style="font-weight:bold">HIGH SPEED AND LOW COSTS</div>
                        <div class="row" style="margin-top:10px">Immediate funding without third-parties. Smart contracts autonomously perform funding – collect and release payments</div>
                      </div>
                  </div>

                  <div class="row" style="margin-top: 50px">
                      <div class="col-lg-3 col-md-3">
                          <image src="{{ asset('images/feature-3.png') }}" style="width:100%;height:100%">
                      </div>

                      <div class="col-lg-9 col-md-9" style="margin-top:auto;margin-bottom:auto">
                        <div class="row" style="font-weight:bold">FAIR DEALS ONLY</div>
                        <div class="row" style="margin-top:10px">Open-source smart contract ensures fair and transparent deals between merchants and affiliates</div>
                      </div>
                  </div>

                  <div class="row" style="margin-top: 50px">
                      <div class="col-lg-3 col-md-3">
                          <image src="{{ asset('images/feature-5.png') }}" style="width:100%;height:100%">
                      </div>

                      <div class="col-lg-9 col-md-9" style="margin-top:auto;margin-bottom:auto">
                        <div class="row" style="font-weight:bold">PROTECTION FROM HACKING</div>
                        <div class="row" style="margin-top:10px">On a decentralized platform, all user accounts are independent; if one account is hacked, this won’t breach the security of.</div>
                      </div>
                  </div>

                  <div class="row" style="margin-top: 50px">
                      <div class="col-lg-3 col-md-3">
                          <image src="{{ asset('images/feature-7.png') }}" style="width:100%;height:100%">
                      </div>

                      <div class="col-lg-9 col-md-9" style="margin-top:auto;margin-bottom:auto">
                        <div class="row" style="font-weight:bold">COST EFFECTIVE</div>
                        <div class="row" style="margin-top:10px">Scale economy through decentralization leading to significant decrease in transaction fees</div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <image src="{{ asset('images/feature-2.png') }}" style="width:100%;height:100%">
                    </div>

                    <div class="col-lg-9 col-md-9" style="margin-top:auto;margin-bottom:auto">
                      <div class="row" style="font-weight:bold">NO MORE MIDDLE MEN</div>
                      <div class="row" style="margin-top:10px">Anyone can join or leave the network as they please without disrupting the network’s ability to form consensus on transactions. </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 50px">
                    <div class="col-lg-3 col-md-3">
                        <image src="{{ asset('images/feature-4.png') }}" style="width:100%;height:100%">
                    </div>

                    <div class="col-lg-9 col-md-9" style="margin-top:auto;margin-bottom:auto">
                      <div class="row" style="font-weight:bold">EASY ENTRY AND FAIR COMPETITION</div>
                      <div class="row" style="margin-top:10px">Taking a dynamic and reflexive perspective on the interaction between technology, law, and economics</div>
                    </div>
                </div>

                <div class="row" style="margin-top: 50px">
                    <div class="col-lg-3 col-md-3">
                        <image src="{{ asset('images/feature-6.png') }}" style="width:100%;height:100%">
                    </div>

                    <div class="col-lg-9 col-md-9" style="margin-top:auto;margin-bottom:auto">
                      <div class="row" style="font-weight:bold">GLOBAL P2P TRADE FINANCING</div>
                      <div class="row" style="margin-top:10px">Peer-to-peer business transaction mechanism based on blockchain technology is developed and explained.</div>
                    </div>
                </div>

                <div class="row" style="margin-top: 50px">
                    <div class="col-lg-3 col-md-3">
                        <image src="{{ asset('images/feature-8.png') }}" style="width:100%;height:100%">
                    </div>

                    <div class="col-lg-9 col-md-9" style="margin-top:auto;margin-bottom:auto">
                      <div class="row" style="font-weight:bold">REAL-TIME DATABASE</div>
                      <div class="row" style="margin-top:10px">Blockchain technology can be considered as one of the main drivers to achieve a substantial cost saving</div>
                    </div>
                </div>
              </div>
          </div>
          <?php
          }
            ?>
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
            <h2 class="title" style="color:#0047ab">Tokenomics</h2>
        </div>
    </div>
    <div class="content-area" style="color:green">
        <div class="row">
            <div class="col-md-4 col-lg-4" style="border:solid;padding:20px">
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

            <div class="col-md-4 col-lg-4" style="border:solid;padding:20px">
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

            <div class="col-md-4 col-lg-4" style="border:solid;padding:20px">
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
                          <span class="fa fa-check" style="color:blue"></span> Anti Whale | Max Wallet 3%
                        </li>
                        <li style="margin-top:10px">
                          <span class="fa fa-check" style="color:blue"></span> Anti Dump | Max Tx 3%
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row text-center" style="margin-top:20px">
            <div class="col-md-12 col-lg-12">
              <ul style="margin-top:20px; font-size: 17px">
                  <li style="margin-top:10px">
                    <span class="fa fa-table-columns" style="color:blue"></span> Token Symbol : $SSC
                  </li>
                  <li style="margin-top:10px">
                    <span class="fa fa-table-columns" style="color:blue"></span> Token Supply : 1.000.000.000.000.000
                  </li>
                  <li style="margin-top:10px">
                    <span class="fa fa-table-columns" style="color:blue"></span> Initial Liquidity Pool : 3 BNB
                  </li>
              </ul>
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
            <h2 class="title" style="color:#0047ab">Roadmap</h2>
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
            <h2 class="title" style="color:#0047ab">Whitepaper</h2>
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
