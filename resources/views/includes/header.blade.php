
<?php
  if(Route::current()->getName() != 'marketplace'){
?>

<!-- Header Start-->
<header class="page-header">
  <!-- Horizontal Menu Start-->
  <nav class="main-menu static-top navbar-dark navbar navbar-expand-lg fixed-top mb-1" style="background:black"><div class="container">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="background:orange">
      <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarCollapse">
    <div id="navigation" class="navbar-nav" style="width:100%">
        <ul class="navbar-nav mt-1">
            <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                <a class="nav-link" href="/" style="color:white;font-size:large">GARUDA FIFA</a>
            </li>
            <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                <a class="nav-link" href="#about" style="color:white;font-size:large">About</a>
            </li>
            <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                <a class="nav-link" href="#tokenomics" style="color:white;font-size:large">Tokenomics</a>
            </li>
            <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.5s">
                <a class="nav-link" href="#roadmap" style="color:white;font-size:large">Roadmap</a>
            </li>
            <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.5s">
                <a class="nav-link" href="#whitepaper" style="color:white;font-size:large">Whitepaper</a>
            </li>
            <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.5s">
                <a class="nav-link" href="#prototype" style="color:white;font-size:large">App</a>
            </li>
        </ul>
        <span id="slide-line"></span>
        <!-- <form class="form-inline mt-2 mt-md-0 text-right" style="margin-left:auto">
            <a class="btn btn-sm btn-gradient-purple btn-glow my-2 my-sm-0 animated" data-animation="fadeInDown" data-animation-delay="1.8s" href="#connect" style="background:#F6BE00">CONNECT</a>
        </form> -->
    </div>
</div>
</div>
  </nav>
  <!-- /Horizontal Menu End-->
</header>
<!-- /Header End-->

<?php } ?>
