
<!DOCTYPE html>
<html>
	<?php
    @include('dh.php')
    ?>

			<div role="main" class="main">
				
   <script src="js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
   <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
              [{b:0,d:2000,y:30,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
              [{b:500,d:1500,o:1}],
              [{b:0,d:1000,y:380,e:{y:6}}],
              [{b:300,d:1000,x:80,e:{x:6}}],
              [{b:300,d:1000,x:330,e:{x:6}}],
              [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
              [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
              [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
              [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $LazyLoading: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1600;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /*jssor slider bullet skin 132 css*/
        .jssorb132 {position:absolute;}
        .jssorb132 .i {position:absolute;cursor:pointer;}
        .jssorb132 .i .b {fill:#fff;fill-opacity:0.8;stroke:#000;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.7;}
        .jssorb132 .i:hover .b {fill:#000;fill-opacity:.7;stroke:#fff;stroke-width:2000;stroke-opacity:0.8;}
        .jssorb132 .iav .b {fill:#000;stroke:#fff;stroke-width:2400;fill-opacity:0.8;stroke-opacity:1;}
        .jssorb132 .i.idn {opacity:0.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
        <defs>
            <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="4"></feGaussianBlur>
            </filter>
            <radialGradient id="jssor_1_grd_2">
                <stop offset="0" stop-color="#fff"></stop>
                <stop offset="1" stop-color="#000"></stop>
            </radialGradient>
            <mask id="jssor_1_msk_3">
                <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
            </mask>
        </defs>
    </svg>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">
            <div style="background-color:#d3890e;">
                <img data-u="image" style="opacity:0.8;" data-src="img/pb-beer-1513436-1600.jpg" />
               
            </div>
            <div>
                <img data-u="image" data-src="img/px-apartment-chairs-contemporary-2015560-1600.jpg" />
              
            </div>
            <div style="background-color:#000000;">
                <img data-u="image" style="opacity:0.8;" data-src="img/px-back-view-boats-couple-2612852-1600.jpg" />
              
            </div>
            <div>
                <img data-u="image" data-src="img/yamamoto.jpg" />
              
            </div>
            <div>
                <img data-u="image" data-src="img/wine-1600.jpg" />
               
            </div>
        </div>
		
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:12px;height:12px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();
    </script>





















				<div class="home-intro bg-primary" id="home-intro">
					<div class="container">

						<div class="row align-items-center">
							<div class="col-lg-8">
								<p>
									The fastest way to grow your business with the leader in <span class="highlighted-word">Technology</span>
									<span>Check out our options and features included.</span>
								</p>
							</div>
							<div class="col-lg-4">
								<div class="get-started text-start text-lg-end">
									<a href="#" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a>
									<div class="learn-more">or <a href="index.html">learn more.</a></div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="container">

					<div class="row text-center pt-3">
						<div class="col-md-10 mx-md-auto">
							<h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
								<span>Porto is </span>
								<span class="word-rotator-words bg-dark">
									<b class="is-visible">incredibly</b>
									<b>especially</b>
									<b>extremely</b>
								</span>
								<span> beautiful and fully responsive.</span>
							</h1>
							<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
							</p>
						</div>
					</div>

				</div>


            
				<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
					<div class="home-concept mt-5">
						<div class="container">

							<div class="row text-center">
								<span class="sun"></span>
								<span class="cloud"></span>
								<div class="col-lg-2 ms-lg-auto">
									<div class="process-image">
										<img src="img/home/home-concept-item-1.png" alt="" />
										<strong>Strategy</strong>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="process-image process-image-on-middle">
										<img src="img/home/home-concept-item-2.png" alt="" />
										<strong>Planning</strong>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="process-image">
										<img src="img/home/home-concept-item-3.png" alt="" />
										<strong>Build</strong>
									</div>
								</div>
								<div class="col-lg-4 ms-lg-auto">
									<div class="project-image">
										<div id="fcSlideshow" class="fc-slideshow">
											<ul class="fc-slides">
												<li><a href="portfolio-single-wide-slider.html"><img class="img-fluid" src="img/projects/project-home-1.jpg" alt="" /></a></li>
												<li><a href="portfolio-single-wide-slider.html"><img class="img-fluid" src="img/projects/project-home-2.jpg" alt="" /></a></li>
												<li><a href="portfolio-single-wide-slider.html"><img class="img-fluid" src="img/projects/project-home-3.jpg" alt="" /></a></li>
											</ul>
										</div>
										<strong class="our-work">Our Work</strong>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>





            

				<div class="container mb-5 pb-4">

					<div class="row">
						<div class="col mb-4">
							<hr class="my-5">
						</div>
					</div>





                    <!-- <div class="row">
							<div class="col text-center">

								
								<div class="overflow-hidden mb-1">
									<h3 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">Our Services</h3>
								</div>
								<h2 class="text-color-dark font-weight-bold text-8 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">What We Do</h2><br>



                                <h2 class="word-rotator font-weight-semi-bold rotate-1 mb-2">
										<span>Porto is </span>
										<span class="word-rotator-words waiting bg-primary">
											<b class="is-visible">incredibly</b>
											<b>especially</b>
											<b>extremely</b>
										</span>
										<span> beautiful.</span>
									</h2>

							</div>
						</div> -->

					<div class="row pb-3">
						<div class="col-lg-8">
							
							<div class="row">
								<div class="col-sm-6">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="icons icon-support text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold text-4-5 mb-1">Customer Support</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
										</div>
									</div>
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="icons icon-doc text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold text-4-5 mb-1">HTML5 / CSS3 / JS</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
										</div>
									</div>
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="icons icon-social-google text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold text-4-5 mb-1">500+ Google Fonts</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
										</div>
									</div>
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="icons icon-pencil text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold text-4-5 mb-1">Colors</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="icons icon-layers text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold text-4-5 mb-1">Sliders</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
										</div>
									</div>
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="icons icon-user text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold text-4-5 mb-1">Icons</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
										</div>
									</div>
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="icons icon-menu text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold text-4-5 mb-1">Buttons</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
										</div>
									</div>
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="icons icon-screen-desktop text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold text-4-5 mb-1">Lightbox</h4>
											<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<!-- <h2 class="font-weight-normal text-6">and more...</h2> -->

							<div class="accordion accordion-modern" id="accordion">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseOne">
												<i class="icons icon-diamond text-color-primary"></i>
												Creative Websites
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="collapse show">
										<div class="card-body text-2">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blanorem ipsum dolor sit amet, consecte.</p>
											<p class="mb-0">Adipiscing elit phasellus blanit ma... <a href="#" class="d-block text-color-dark font-weight-semibold pt-4">read more <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a></p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseTwo">
												<i class="icons icon-bubble text-color-primary"></i>
												Contact Forms
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="collapse">
										<div class="card-body text-2">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle text-color-dark font-weight-bold" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseThree">
												<i class="icons icon-grid text-color-primary"></i>
												Portfolio Pages
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="collapse">
										<div class="card-body text-2">
											<p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr class="solid my-5">





                <div id="examples">
					<section class="section border-0 p-relative">
						<div class="particles-wrapper z-index-1">
							<div id="particles-4"></div>
						</div>
						<div class="container">
							<div class="row py-5 my-5">
								<div class="col text-center py-5">
									<h4 class="m-0 text-5-5">Connected Points Particles</h4>
								</div>
							</div>
						</div>
					</section>
					</div>


					





					

				

				</div>



                <div class="container">

				<div class="row counters">
					<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<div class="counter counter-primary appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="300">
							<i class="fas fa-user"></i>
							<strong data-to="45000" data-append="+">0</strong>
							<label>Happy Clients</label>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<div class="counter counter-primary appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="600">
							<i class="fas fa-star"></i>
							<strong data-to="15">0</strong>
							<label>Years in Business</label>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
						<div class="counter counter-primary appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="900">
							<i class="fas fa-coffee"></i>
							<strong data-to="352">0</strong>
							<label>Cups of Coffee</label>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="counter counter-primary appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="1200">
							<i class="far fa-chart-bar"></i>
							<strong data-to="178">0</strong>
							<label>High Score</label>
						</div>
					</div>

					
				</div></div>





<br><br>
                
				<div id="examples" class="container py-2">



                <div class="container py-5 mb-3">
						<div class="row">
							<div class="col text-center">

								<div class="divider divider-small divider-small-lg mt-0 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
									<hr class="bg-primary border-radius m-auto">
								</div>
								<div class="overflow-hidden mb-1">
									<h3 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100"> Our Client's Says      </h3>
								</div>
								<h2 class="text-color-dark font-weight-bold text-8 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Success Stories</h2>

							</div>
						</div>



                

<div class="row">
    <div class="col-lg-4">
        <div class="testimonial testimonial-primary">
            <blockquote>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
            </blockquote>
            <div class="testimonial-arrow-down"></div>
            <div class="testimonial-author">
                <div class="testimonial-author-thumbnail">
                    <img src="img/clients/client-1.jpg" class="rounded-circle" alt="">
                </div>
                <p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="testimonial testimonial-primary">
            <blockquote>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
            </blockquote>
            <div class="testimonial-arrow-down"></div>
            <div class="testimonial-author">
                <div class="testimonial-author-thumbnail">
                    <img src="img/clients/client-1.jpg" class="rounded-circle" alt="">
                </div>
                <p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="testimonial testimonial-primary">
            <blockquote>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
            </blockquote>
            <div class="testimonial-arrow-down"></div>
            <div class="testimonial-author">
                <div class="testimonial-author-thumbnail">
                    <img src="img/clients/client-1.jpg" class="rounded-circle" alt="">
                </div>
                <p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
            </div>
        </div>
    </div>
</div>
</div>






<section class="section border-0 bg-transparent m-0" id="start">
					<div class="container py-5 mb-3">
						<div class="row">
							<div class="col text-center">

								<div class="divider divider-small divider-small-lg mt-0 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
									<hr class="bg-primary border-radius m-auto">
								</div>
								<div class="overflow-hidden mb-1">
									<h3 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">Our Mission</h3>
								</div>
								<h2 class="text-color-dark font-weight-bold text-8 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">We are committed to providing our clients the best<br>strategic guidance available</h2>

							</div>
						</div>
						<div class="row pt-4 pb-5">
							<div class="col-lg-6 text-center p-relative pt-5">

								<div class="appear-animation custom-element-wrapper custom-element-9" data-appear-animation="expandIn" data-appear-animation-delay="1000">
									<div class="bg-color-primary particle particle-dots w-100 h-100 opacity-3"></div>	
								</div>

								<div class="appear-animation custom-element-wrapper custom-element-10" data-appear-animation="expandIn" data-appear-animation-delay="1200">
									<div class="bg-color-primary particle particle-dots w-100 h-100 opacity-3"></div>	
								</div>

								<div class="appear-animation custom-element-wrapper custom-element-11 p-relative rotate-r-45" data-appear-animation="fadeIn" data-appear-animation-delay="300">
									<img class="img-fluid" src="img/demos/business-consulting-4/generic/generic-6.jpg" alt="">
								</div>

							</div>
							<div class="col-lg-6 pt-5 mt-5 pt-lg-0 mt-lg-0">
								<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
									<p class="font-weight-medium text-4-5 line-height-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
									<p class="text-3-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet.</p>

									<ul class="list list-icons list-icons-style-2 list-icons-lg">
										<li class="line-height-9 text-3-5 mb-1">
											<i class="fas fa-check border-width-2 text-3"></i>Amet orci quis arcu vestibulum vestibulum.
										</li>
										<li class="line-height-9 text-3-5 mb-1">
											<i class="fas fa-check border-width-2 text-3"></i>Quis arcu vestibulum vestibulum.
										</li>
										<li class="line-height-9 text-3-5 mb-1">
											<i class="fas fa-check border-width-2 text-3"></i>Sit amet orci quis arcu.
										</li>
									</ul>
								</div>

								<div class="d-block pt-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
									<a href="demo-business-consulting-4-about-us.html" class="btn btn-modern btn-primary btn-arrow-effect-1 text-capitalize text-2-5 px-5 py-3 anim-hover-translate-top-5px transition-2ms">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
								</div>
							</div>
						</div>
					</div>
				</section>



































                <div class="container container-xl-custom py-5 my-5">
					<div class="row justify-content-center">
						<div class="col-xl-8 text-center mb-4">
							<h2 class="font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeIn">Explore All Possibilities</h2>
							<p class="line-height-9 text-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><span class="opacity-7">Lorem ipsum dolor sit amet, in maximus libero placerat sed.</span></p>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-10 px-lg-5">
							<div class="row">
								<div class="col-md-6 mb-2 pb-2 px-2 appear-animation" data-appear-animation="fadeInRightShorter">
									<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
										<span class="thumb-info-wrapper thumb-info-wrapper-no-opacity">
											<img src="img/office/our-office-9.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-slide-info-hover-1">
													<span class="thumb-info-inner text-4">Our Services</span>
												</span>
												<span class="thumb-info-slide-info-hover-2">
													<span class="thumb-info-inner text-2">
														<a href="#" class="d-inline-flex align-items-center btn btn-light text-color-dark font-weight-bold px-4 btn-py-2 text-1 rounded">VIEW OUR SERVICES <i class="fa fa-arrow-right ms-2 ps-1 text-3"></i></a>
													</span>
												</span>
											</span>
										</span>
									</span>
								</div>
								<div class="col-md-6 mb-2 pb-2 px-2 appear-animation" data-appear-animation="fadeInLeftShorter">
									<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
										<span class="thumb-info-wrapper thumb-info-wrapper-no-opacity">
											<img src="img/office/our-office-10.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-slide-info-hover-1">
													<span class="thumb-info-inner text-4">Our Team</span>
												</span>
												<span class="thumb-info-slide-info-hover-2">
													<span class="thumb-info-inner text-2">
														<a href="#" class="d-inline-flex align-items-center btn btn-light text-color-dark font-weight-bold px-4 btn-py-2 text-1 rounded">VIEW OUR TEAM <i class="fa fa-arrow-right ms-2 ps-1 text-3"></i></a>
													</span>
												</span>
											</span>
										</span>
									</span>
								</div>
								<div class="col-md-4 mb-2 pb-2 px-2 appear-animation" data-appear-animation="fadeInLeftShorter">
									<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
										<span class="thumb-info-wrapper thumb-info-wrapper-no-opacity">
											<img src="img/office/our-office-11.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-slide-info-hover-1">
													<span class="thumb-info-inner text-4">Our Offices</span>
												</span>
												<span class="thumb-info-slide-info-hover-2">
													<span class="thumb-info-inner text-2">
														<a href="#" class="d-inline-flex align-items-center btn btn-light text-color-dark font-weight-bold px-4 btn-py-2 text-1 rounded">VIEW OUR OFFICES <i class="fa fa-arrow-right ms-2 ps-1 text-3"></i></a>
													</span>
												</span>
											</span>
										</span>
									</span>
								</div>
								<div class="col-md-4 mb-2 pb-2 px-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
									<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
										<span class="thumb-info-wrapper thumb-info-wrapper-no-opacity">
											<img src="img/office/our-office-12.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-slide-info-hover-1">
													<span class="thumb-info-inner text-4">Our Mission</span>
												</span>
												<span class="thumb-info-slide-info-hover-2">
													<span class="thumb-info-inner text-2">
														<a href="#" class="d-inline-flex align-items-center btn btn-light text-color-dark font-weight-bold px-4 btn-py-2 text-1 rounded">VIEW OUR MISSION <i class="fa fa-arrow-right ms-2 ps-1 text-3"></i></a>
													</span>
												</span>
											</span>
										</span>
									</span>
								</div>
								<div class="col-md-4 px-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
									<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
										<span class="thumb-info-wrapper thumb-info-wrapper-no-opacity">
											<img src="img/office/our-office-13.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-slide-info-hover-1">
													<span class="thumb-info-inner text-4">Our Contact</span>
												</span>
												<span class="thumb-info-slide-info-hover-2">
													<span class="thumb-info-inner text-2">
														<a href="#" class="d-inline-flex align-items-center btn btn-light text-color-dark font-weight-bold px-4 btn-py-2 text-1 rounded">VIEW OUR CONTACT <i class="fa fa-arrow-right ms-2 ps-1 text-3"></i></a>
													</span>
												</span>
											</span>
										</span>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>









				<div class="container">
					<div class="row align-items-center text-center py-5 my-4">
						<div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
							<img src="img/logos/logo-8.png" alt class="img-fluid" style="max-width: 90px;" />
						</div>
						<div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
							<img src="img/logos/logo-9.png" alt class="img-fluid" style="max-width: 140px;" />
						</div>
						<div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
							<img src="img/logos/logo-10.png" alt class="img-fluid" style="max-width: 140px;" />
						</div>
						<div class="col-sm-4 col-xl-2 mb-5 mb-lg-0">
							<img src="img/logos/logo-11.png" alt class="img-fluid" style="max-width: 140px;" />
						</div>
						<div class="col-sm-4 col-xl-2 mb-5 mb-lg-0">
							<img src="img/logos/logo-12.png" alt class="img-fluid" style="max-width: 100px;" />
						</div>
						<div class="col-sm-4 col-xl-2">
							<img src="img/logos/logo-13.png" alt class="img-fluid" style="max-width: 100px;" />
						</div>
					</div>
				</div>


				






				


				




			</div>

			<footer id="footer">
				<div class="container">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">NEWSLETTER</h5>
							<p class="pe-1">Keep up on our always evolving product features and technology. Enter your e-mail address and subscribe to our newsletter.</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="me-4 mb-3 mb-md-0">
								<div class="input-group input-group-rounded">
									<input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="email">
									<button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
								</div>
							</form>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">LATEST TWEETS</h5>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
							<div class="contact-details">
								<h5 class="text-3 mb-3">CONTACT US</h5>
								<ul class="list list-icons list-icons-lg">
									<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
									<li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p></li>
									<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-lg-2">
							<h5 class="text-3 mb-3">FOLLOW US</h5>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
								<a href="index.html" class="logo pe-0 pe-lg-3">
									<img alt="Porto Website Template" src="img/logo-footer.png" class="opacity-5" width="49" height="22" data-plugin-options="{'appearEffect': 'fadeIn'}">
								</a>
							</div>
							<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
								<p>© Copyright 2022. All Rights Reserved.</p>
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
								<nav id="sub-menu">
									<ul>
										<li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="ms-1 text-decoration-none"> FAQ's</a></li>
										<li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="ms-1 text-decoration-none"> Sitemap</a></li>
										<li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ms-1 text-decoration-none"> Contact Us</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/lazysizes/lazysizes.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/jquery.vide.min.js"></script>
		<script src="vendor/vivus/vivus.min.js"></script>
		<script src="vendor/particles/particles.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Circle Flip Slideshow Script -->
		<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<!-- Current Page Views -->
		<script src="js/views/view.home.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<script src="js/examples/examples.particles.js"></script>
		<script src="js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>

	</body>
	</body>
</html>