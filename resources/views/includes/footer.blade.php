    <!-- Footer start-->
    <footer id="contact" class="footer1">
        <div class="container">
            <div class="pt-3 pb-3">
                <div class="row justify-content-between">
                    <div class="col-auto mr-auto">
                        <span class="copyright">Copyright 2023 VIZION All Rights Reserved.</span>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer stop-->
    <!-- === back-to-top === -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!-- === back-to-top End === -->
</div>

<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
<!-- popper -->
<script src="{{ asset('/js/popper.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<!-- Owl Carousel -->
<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
<!-- Slick Slider-->
<script src="{{ asset('/js/slick.js') }}"></script>
<!-- main -->
<script src="{{ asset('/js/main.js') }}"></script>
<script src="{{ asset('/revslider/js/revolution.tools.min.js') }}"></script>
<script src="{{ asset('/revslider/js/rs6.min.js') }}"></script>
<!--custom -->
<script src="{{ asset('/js/custom.js') }}"></script>
<script src="{{ asset('/js/vizion-circle.js') }}"></script>

<script>
    jQuery(function() {
        tpj = jQuery;
        if(tpj("#rev_slider_1_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_1_1");
        }else{
            revapi1 = tpj("#rev_slider_1_1").show().revolution({
                jsFileLocation:"./revslider/js",
                sliderLayout:"fullwidth",
                visibilityLevels:"1240,1024,778,480",
                gridwidth:1240,
                gridheight:900,
                minHeight:"",
                spinner:"spinner0",
                editorheight:"900,768,960,720",
                responsiveLevels:"1240,1024,778,480",
                disableProgressBar:"on",
                navigation: {
                    onHoverStop:false
                },
                parallax: {
                    levels:[1,2,3,4,5,6,7,8,9,10,11,12,49,50,51,30],
                    type:"mouse",
                    origo:"slideCenter",
                    speed:0
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid:true
                },
            });
        }

    });
</script>
