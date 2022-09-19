<!-- Preloader | Comment below code if you don't want preloader-->
<div id="loader-wrapper">
<svg viewbox=" 0 0 512 512" id="loader">
    <linearGradient id="loaderLinearColors" x1="0" y1="0" x2="1" y2="1">
        <stop offset="5%" stop-color="#28bcfd"></stop>
        <stop offset="100%" stop-color="#1d78ff"></stop>
    </linearGradient>
    <g>
        <circle cx="256" cy="256" r="150" fill="none" stroke="url(#loaderLinearColors)" />
    </g>
    <g>
        <circle cx="256" cy="256" r="125" fill="none" stroke="url(#loaderLinearColors)" />
    </g>
    <g>
        <circle cx="256" cy="256" r="100" fill="none" stroke="url(#loaderLinearColors)" />
    </g>
    <g>
        <circle cx="256" cy="256" r="75" fill="none" stroke="url(#loaderLinearColors)" />
    </g>
    <circle cx="256" cy="256" r="60" fill="url(#loaderImage)" stroke="none" stroke-width="0" />

    <!-- Change the preloader logo here -->
    <defs>
        <pattern id="loaderImage" height="100%" width="100%" patternContentUnits="objectBoundingBox">
            <image href="{{ asset('images/logo.PNG') }}" preserveAspectRatio="none" width="1" height="1"></image>
        </pattern>
    </defs>
</svg>

<div class="loader-section section-left"></div>
<div class="loader-section section-right"></div>
</div>
<!--/ Preloader --><nav class="vertical-social">
<ul>
    <li><a href="https://t.me/ArabianApeGrow" target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
    <li><a href="mailto:arabianapegrow@gmail.com" target="_blank"><i class="fa fa-medium" aria-hidden="true"></i></a></li>
    <li><a href="https://twitter.com/ArabianApeGrow" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <!-- <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> -->
</ul>
</nav>

<!-- /////////////////////////////////// HEADER /////////////////////////////////////-->

<?php
  if(Route::current()->getName() != 'nft'){
?>

<!-- Header Start-->
<header class="page-header">
  <!-- Horizontal Menu Start-->
  <nav class="main-menu static-top navbar-dark navbar navbar-expand-lg fixed-top mb-1"><div class="container">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarCollapse">
    <div id="navigation" class="navbar-nav" style="width:100%">
        <ul class="navbar-nav mt-1">
            <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                <a class="nav-link" href="/" style="color:pink">ARABIAN APE GROW</a>
            </li>
            <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                <a class="nav-link" href="#tokenomics">Tokenomics</a>
            </li>
            <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.3s">
                <a class="nav-link" href="#whitepaper">Whitepaper</a>
            </li>
            <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.5s">
                <a class="nav-link" href="#roadmap">Roadmap</a>
            </li>

            <?php
              if($agent->isMobile()){
            ?>
                <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.5s">
                    <a class="nav-link" href="#community">Community</a>
                </li>
            <?php
              }
            ?>
        </ul>
        <span id="slide-line"></span>
        <form class="form-inline mt-2 mt-md-0 text-right" style="margin-left:auto">
            <a class="btn btn-sm btn-gradient-purple btn-glow my-2 my-sm-0 animated" data-animation="fadeInDown" data-animation-delay="1.8s" href="/nft">NFT Market</a>
        </form>
    </div>
</div>
</div>
  </nav>
  <!-- /Horizontal Menu End-->
</header>
<!-- /Header End-->

<?php } ?>
