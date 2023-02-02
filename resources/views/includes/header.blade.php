<!-- Header Start-->
<header class="page-header">
  <!-- Horizontal Menu Start-->
  <nav class="main-menu static-top navbar-dark navbar navbar-expand-lg fixed-top mb-1" style="background:purple">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="background:white;margin-left:20px">
          <span class="navbar-toggler-icon"></span>
      </button>

      <?php
        if($agent->isMobile()){
      ?>
            <h4 style="margin:auto">IMORI</h4>
      <?php
          }
      ?>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div id="navigation" class="navbar-nav" style="width:100%">
            <ul class="navbar-nav mt-1">
              <?php
                if(!$agent->isMobile()){
              ?>
                  <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                      <a class="nav-link" href="/" style="color:white;font-size:large">IMORI</a>
                  </li>
              <?php } ?>

              <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                  <a class="nav-link" href="#head-area" style="color:white;font-size:large">Home</a>
              </li>
              <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                  <a class="nav-link" href="#nfts" style="color:white;font-size:large">NFTs</a>
              </li>
              <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                  <a class="nav-link" href="#tokenomics" style="color:white;font-size:large">Tokenomics</a>
              </li>
          </ul>
          <span id="slide-line"></span>
        </div>
      </div>
    </div>
  </nav>
  <!-- /Horizontal Menu End-->
</header>
<!-- /Header End-->
