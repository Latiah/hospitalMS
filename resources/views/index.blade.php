@extends('layouts.app')
@section('content')
<div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('photos/bulb.jpg');" {{ $app = App\Models\general_settings::latest()->first() }}>
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12">
            <div class="text-contant">
               <h2>
                  <a href="" class="typewrite" data-period="2000" data-type='[ "Welcome to Waste2wealth", "We care about your work", "We provide electricity to the society!" ]'  style="color:white;">
                  <span class="wrap"></span>
                  </a>
               </h2>
            </div>
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<!-- end section -->
<div id="time-table" class="time-table-section">
   <div class="container">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time one" style="background:#2A1F3F;">
               <span class="info-icon"><i class="fa fa-car" aria-hidden="true"></i></span>
               <h3>Our products</h3>
               <p>We provide electricity to households, companies, electric vehicles like cars and motorcycles </p>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time middle" style="background:#2A1F3F;">
               <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
               <h3>We are open 24/7</h3>
               <p>You are free to buy electricity anytine and anywhere</p>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time three" style="background:#2A1F3F;">
               <span class="info-icon"><i class="fa fa-money" aria-hidden="true"></i></span>
               <h3>Cost</h3>
               <p>The electricity we sell is affordable and this was also our goal in producing it so that everyone can afford to use it</p>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="about" class="section wow fadeIn">
   <div class="container">
      
      <!-- end title -->
       <div class="heading">
         <h2>What we do</h2>
      </div>
             
      <div class="row">
         <div class="col-md-6">
            <div class="message-box">
               <h2>Making electricity</h2>
               <p class="lead">We produce  electricity </p>
               <h2>Selling electricity</h2>
               <p class="lead">We sell electricity and provide employment opportunities to people.</p>
            </div>
            <!-- end messagebox -->
         </div>
         <!-- end col -->
        <!-- <div class="col-md-6">
            <div class="post-media wow fadeIn">
               <img src="images/about_03.jpg" alt="" class="img-responsive">
               <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
            </div> -->
            <!-- end media -->
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
      <hr class="hr1">
      <div class="row">
          <div class="heading">
         <!--<span class="icon-logo"><img src="{{ ($app) ? 'storage/'.$app->icon_logo_path:'images/icon-logo.png' }}" alt="#"></span>-->
         <h2>OUR TARGET CUSTOMERS</h2>
      </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="photos/house.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="photos/house.jpg" alt="" class="img-responsive">
               </div>
               <h3>Individuals(households)</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="photos/go  kabisa.jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="photos/go  kabisa.jpeg" alt="" class="img-responsive">
               </div>
               <h3>Go Kabisa</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="photos/ampersand.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="photos/ampersand.jpg" alt="" class="img-responsive">
               </div>
               <h3>Ampersand</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="photos/university.jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="photos/university.jpeg" alt="" class="img-responsive">
               </div>
               <h3>Organizations</h3>
            </div>
            <!-- end service -->
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<div id="service" class="services wow fadeIn">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
             <div class="inner-services">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
                      <h4>INSTALLATION</h4>
                      <p>Reach out for you want to install this electricity.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                      <h4>FIXING/ REPAIRING</h4>
                      <p>In need of repairing feell free to call us and we will be happy to help</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                      <h4>JOB opportunities</h4>
                      <p>If you are interested in what we do and you want a job  you can also contact us</p>
                   </div>
                </div>
                <!--<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon4.png" alt="#" /></span>
                      <h4>CHILDREN CARE CENTER</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing.</p>
                   </div>
                </div>-->
                <!--<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon5.png" alt="#" /></span>
                      <h4>FINE INFRASTRUCTURE</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing.</p>
                   </div>
                </div>-->
                <!--<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon6.png" alt="#" /></span>
                      <h4>ANYTIME BLOOD BANK</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing.</p>
                   </div>
                </div>-->
             </div>
          </div>
          @livewire('appointmentform')
       </div>
    </div>
 </div>
 <!-- end section -->
<!-- doctor -->

<!-- <div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
  <div class="container">

   <div class="heading">
         <span class="icon-logo"><img src="{{ ($app) ? 'storage/'.$app->icon_logo_path:'images/icon-logo.png' }}" alt="#"></span>
         <h2>The Specialist Clinic</h2>
      </div>

      <div class="row dev-list text-center">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
              <div class="widget clearfix">
                  <img src="images/doctor_01.jpg" alt="" class="img-responsive img-rounded">
                  <div class="widget-title">
                      <h3>Soren Bo Bostian</h3>
                      <small>Clinic Owner</small>
                  </div>
                  <!-- end title -->-->
                 <!-- <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                  <div class="footer-social">
                      <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                  </div>
              </div><!--widget -->
          <!--</div><!-- end col -->

         <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
              <div class="widget clearfix">
                  <img src="images/doctor_02.jpg" alt="" class="img-responsive img-rounded">
                  <div class="widget-title">
                      <h3>Bryan Saftler</h3>
                      <small>Internal Diseases</small>
                  </div>
                  <!-- end title -->
                 <!-- <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                  <div class="footer-social">
                      <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                  </div>
              </div><!--widget -->
          </div><!-- end col -->

          <!--<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
              <div class="widget clearfix">
                  <img src="images/doctor_03.jpg" alt="" class="img-responsive img-rounded">
                  <div class="widget-title">
                      <h3>Matthew Bayliss</h3>
                      <small>Orthopedics Expert</small>
                  </div>
                  <!-- end title -->
                 <!-- <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                  <div class="footer-social">
                      <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                  </div>
              </div><!--widget -->
          <!--</div><!-- end col -->

     <!-- </div><!-- end row -->
 <!-- </div><!-- end container -->
<!--
{{-- <div id="price" class="section pr wow fadeIn" style="background-image:url('images/price-bg.png');">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="tab-content">
               <div class="tab-pane active fade in" id="tab1">
                  <div class="row text-center">
                     <div class="col-md-4">
                        <div class="pricing-table">
                           <div class="pricing-table-header">
                              <h2>Shared Hosting</h2>
                              <h3>$85/month</h3>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="pricing-table pricing-table-highlighted">
                           <div class="pricing-table-header grd1">
                              <h2>WordPress Hosting</h2>
                              <h3>$59/year</h3>
                           </div>
                           <div class="pricing-table-space"></div>
                           <div class="pricing-table-text">
                              <p>This is a perfect choice for small businesses and startups.</p>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="pricing-table">
                           <div class="pricing-table-header">
                              <h2>Reseller Hosting</h2>
                              <h3>$85/one-time</h3>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
               </div>
               <!-- end pane -->
              <div class="tab-pane fade" id="tab2">
                  <div class="row text-center">
                     <div class="col-md-6">
                        <div class="pricing-table">
                           <div class="pricing-table-header">
                              <h2>Dedicated Server</h2>
                              <h3>$85/month</h3>
                           </div>
                           <div class="pricing-table-space"></div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="pricing-table pricing-table-highlighted">
                           <div class="pricing-table-header grd1">
                              <h2>VPS Server</h2>
                              <h3>$59/month</h3>
                           </div>
                           <div class="pricing-table-space"></div>
                           <div class="pricing-table-text">
                              <p>This is a perfect choice for small businesses and startups.</p>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
               </div>
               <!-- end pane -->
            </div>
            <!-- end content -->
         </div>
         <!-- end col -->
      </div>
   </div>
</div>

<!-- end doctor section --> --}}
<!--
<div id="testimonials" class="section wb wow fadeIn">
   <div class="container">
      <div class="heading">
         <span class="icon-logo"><img src="{{ ($app) ? 'storage/'.$app->icon_logo_path:'images/icon-logo.png' }}" alt="#"></span>
         <h2>Testimonials</h2>
      </div>
      <!-- end title -->
      <!--<div class="row">
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> The amazing clinic! Wonderful Support!</h3>
                  <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                  <h4>James Fernando <small>- Manager of Racer</small></h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
       <!--  <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> Thanks for Help us!</h3>
                  <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_02.png" alt="" class="img-responsive alignleft">
                  <h4>Andrew Atkinson <small>- Life Manager</small></h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
     <!-- <hr class="invis">
      <div class="row">
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> The amazing clinic! Wonderful Support!</h3>
                  <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_03.png" alt="" class="img-responsive alignleft">
                  <h4>Amanda DOE <small>- Manager of Racer</small></h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
        <!-- <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> Thanks for Help us!</h3>
                  <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                  <h4>Martin Johnson <small>- Founder of Goosilo</small></h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<!-- end section -->

@livewire('contactus')
</div>

@endsection
