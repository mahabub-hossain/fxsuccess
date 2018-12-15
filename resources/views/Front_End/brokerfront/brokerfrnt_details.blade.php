<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>FXSUCCESSBD</title>
    <meta name="description" content="Material Style Theme">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="shortcut icon" href="assets/img/favicon.png?v=3">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--Font Awesome Animation-->
  <link rel="stylesheet" href="{{asset('assets/css/font-animation.css')}}">
    <!-- Reveloution Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/revolution/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/revolution/revolution/css/settings.css')}}">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/revolution/revolution/css/layers.css')}}">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/revolution/revolution/css/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/preload.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins.min.css')}}">
    <!-- TYPEWRITER ADDON -->
    <script type="text/javascript" src="{{asset('assets/plugins/revolution/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/revolution/revolution-addons/typewriter/css/typewriter.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.light-blue-500.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flipclock.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- Custom CSS & Signal Ticker -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/app.css')}}">
    <script src="{{asset('assets/js/moment.js')}}"></script>
    <script src="{{asset('assets/js/moment-timezone.js')}}"></script>
    <script type="text/javascript">
      /***********************************************
      * Local Time script- By Dynamic Drive (http://www.dynamicdrive.com)
      * Please keep this notice intact
      * Visit http://www.dynamicdrive.com/ for this script and 100s more.
      ***********************************************/
      function showLocalTime(container, zoneString, formatString){
         var thisobj=this
         this.container=document.getElementById(container)
         this.localtime = moment.tz(new Date(), zoneString)
         this.formatString = formatString
         this.container.innerHTML = this.localtime.format( this.formatString )
         setInterval(function(){thisobj.updateContainer()}, 1000) //update container every second
      }
      
      showLocalTime.prototype.updateContainer=function(){
         this.localtime.second(this.localtime.seconds() + 1 )
         this.container.innerHTML = this.localtime.format( this.formatString )
      }
      
    </script>
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="load-new">
        <img src="{{asset('assets/img/loadspin.gif')}}" alt="">
        </div>
      </div>
    </div>
    <!--header bar-->
    <div class="d-none d-md-block ">
      <nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-blue1 no-mb" style="margin-bottom:0px">
        <div class="container container-full">
          <div class="row  header-left">
            <div class="btn-group">
            <button type="button" class="btn btn-primary4 btn-raised language-btn"> <img src="{{asset('assets/img/flag/bd.png')}}" class="language-flag">Bangla</button>
            </div>
            <div>
              <ul class="navbar-nav ml auto  ">
                <li class="nav-item ml-neg-22">
                  <i class="color-white fa fa-fax mr-1"></i> Phone: +91 8443 847147
                </li>
                <li class="nav-item ml-neg-22">
                  <i class="color-white zmdi zmdi-email mr-1"></i> help@fxsuccessbd.com
                </li>
              </ul>
            </div>
          </div>
          <div class="row header-right ">
            <h3 class="social-net-header social-hide mr-1">Social Networks</h3>
            <div class="d-inline-block">
              <a href="javascript:void(0)" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs no-mr-md btn-facebook">
              <i class="zmdi zmdi-facebook"></i>
              </a>
              <a href="javascript:void(0)" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs no-mr-md btn-twitter1">
              <i class="zmdi zmdi-twitter"></i>
              </a>
              <a href="javascript:void(0)" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs no-mr-md btn-google1">
              <i class="zmdi zmdi-google"></i>
              </a>
              <a href="javascript:void(0)" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs no-mr-md btn-youtube1">
              <i class="zmdi zmdi-youtube-play"></i>
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!--header bar end-->
    <div class="ms-site-container container-bg ">
      <!-- Modal -->
      <header class="ms-header ms-header-primary ">
        <!--ms-header-primary-->
        <div class="container container-full position-relative">
          <div class="ms-title fxsuccess-logo">
            <a href="index.html">
              <h1 class="animated fadeInRight animation-delay-6 logo-font">
                <span class="logo-border"></span>
                <span class="logo-border"></span>
                <span class="logo-border"></span>
                <img src="assets/img/torus.png" alt="Torus" class="torus-img">
                <span class="fx">FX</span>
                <span class="position-relative fw-600 cap-pos">SUCCESS
                <i class="fa fa-graduation-cap"></i></span>
                <span class="bd">
                <span class="bd-link"></span>
                <span class="bd-text">BD</span>
                </span>
              </h1>
            </a>
          </div>
          <div class="top-add">
            <a href="javascript:void(0)">
              <img src="assets/img/add/fx_vps.gif" alt="FX VPS Animation">
            </a>
          </div>
          <div class="header-right surround-border d-lg-none d-md-none d-sm-block">
            <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary ms-toggle-left animated zoomInDown animation-delay-10">
            <i class="zmdi zmdi-menu heart-beat"></i>
            </a>
          </div>
        </div>
      </header>
      <nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-blue1 no-mb">
        <div class="container container-full">
          <div class="ms-title fxsuccess-logo fxsuccess-logo-sm d-lg-none d-md-none d-sm-block">
            <a href="index.html" class="text-white">
              <h1 class="animated fadeInRight animation-delay-6 logo-font">
                <span class="logo-border"></span>
                <span class="logo-border"></span>
                <span class="logo-border"></span>
                <img src="assets/img/torus.png" alt="Torus" class="torus-img">
                <span class="fx">FX</span>
                <span class="position-relative fw-600 cap-pos">SUCCESS
                <i class="fa fa-graduation-cap"></i></span>
                <span class="bd">
                <span class="bd-link"></span>
                <span class="bd-text">BD</span>
                </span>
              </h1>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="ms-navbar">
            <ul class="navbar-nav ml auto ">
              <li class="nav-item text-uppercase">
                <a href="index.html" role="button" aria-haspopup="true" aria-expanded="false" data-name="home">
                <i class="fa fa-home fa-custom-x"></i>HOME
                </a>
              </li>
              <li class="nav-item text-uppercase">
                <a href="analysis/analysis.html" role="button" aria-haspopup="true" aria-expanded="false" data-name="free courses">Forex analysis</a>
              </li>
              <li class="nav-item text-uppercase">
                <a href="article/article.html" role="button" aria-haspopup="true" aria-expanded="false" data-name="article">Forex article</a>
              </li>
              <li class="nav-item text-uppercase">
                <a href="forex-signal/forex-signals.html" role="button" aria-haspopup="true" aria-expanded="false" data-name="free courses">Forex Signals</a>
              </li>
              <li class="nav-item active dropdown text-uppercase">
                <a href="javascript:void(0)" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown"
                  role="button" aria-haspopup="true" aria-expanded="false" data-name="fxtutor">Forex Broker
                <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu drop-nav-fix">
                  <li>
                    <a class="dropdown-item text-uppercase" href="broker-review.html">Broker Review</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item text-uppercase">
                <a href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="false" data-name="daily signal">Forex Forum</a>
              </li>
              <li class="nav-item text-uppercase">
                <a href="faq.html" role="button" role="button" aria-haspopup="true" aria-expanded="false" data-name="services">FAQ</a>
              </li>
               <li class="nav-item text-uppercase">
                <a href="contact-us.html" role="button" role="button" aria-haspopup="true" aria-expanded="false" data-name="services">Contact</a>
              </li>
            </ul>
          </div>
          <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu d-md-none d-lg-none d-sm-block">
          <i class="zmdi zmdi-menu"></i>
          </a>
        </div>
        <!-- container -->
      </nav>
      <!--Stat Header Sliders -->
      <div class="extra-container">
        <div class="container-fluid currency-slider-iframe">
          <iframe src="https://www.currency.me.uk/remote/CUK-LFOREXRTICKER-2.php?ws=http://www.fxtutor.net/&amp;s=1&amp;f=verdana&amp;fc=ffffff&amp;fs=12px&amp;mbg=03357B&amp;bs=no&amp;bc=03357B&amp;vc=fff&amp;lc=eee&amp;lhc=1E5881" height="30" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="width: 100%;position: relative;top: -2px"></iframe>
        </div>
      </div>
         <!-- Review Detail Start-->
         <div class="wrap wrap-broker">
            <div class="container">
               <!-- Broker Detail Header Parts -->
                  <div class="row">
                     <!-- Broker Image Box -->
                     <div class="col-lg-3 d-none d-lg-block md-pr-1-half">
                        <div class="broker-imagebox h-brok img-left">
                           <div class="imagebox-inner">
                              <img src="assets/img/city.jpg" alt="">
                              <div class="pic-shadow"></div>
                           </div>
                        </div>
                     </div>
                     <!-- Broker Image Box END -->
                     <!-- Broker Info Table -->
                     <div class="col-lg-47 col-md-6 tablet-8 lg-pl-0 md-pr-0 text-center">
                        <h2 class="short-info">FXTM info</h2>
                        <div class="info-container">
                           <div class="row">
                              <div class="col-lg-6 tab-pr-0 border-r">
                                 <ul class="reviewer-info-list">
                                    <li class="hoverOnLi" data-value="1">
                                       <strong>Website :</strong>
                                       <span class="regulation removeadd-1">
                                        <span>
                                       <a href="javascript:void(0)">https://www.fxsuccessbd.com/</a>
                                     </span>
                                     </span>
                                    </li>
                                    <li>
                                       <strong>Established :</strong>
                                       2011
                                    </li>
                                    <li class="hoverOnLi" data-value="2">
                                       <strong>Review info :</strong>
                                       <span class="regulation removeadd-2">
                                        <span>AVATRADE</span>
                                     </span>
                                    </li>
                                    <li>
                                       <strong>Review Date :</strong>
                                       2018-09-03
                                    </li>
                                 </ul>
                                 <button class="btn btn-raised btn-success real-ac" id="d-ipad">Open Real Account <i class="fa fa-chevron-circle-right"></i></button>
                              </div>
                              <div class="col-lg-6 tab-pl-0 d-ipad-none">
                                 <ul class="reviewer-info-list right">
                                    <li class="hoverOnLi" data-value="3">
                                       <strong>Regulation :</strong>
                                       <span class="regulation removeadd-3">
                                        <span>CySEC, FCA, IFSC, CySEC, FCA, IFSC</span>
                                        </span>
                                    </li>
                                    <li>
                                       <strong>Country :</strong>
                                       Cyprus
                                    </li>
                                    <li class="hoverOnLi" data-value="4">
                                       <strong>Reviewed By :</strong>
                                       <span class="regulation removeadd-4">
                                        <span>FXTUTOR</span>
                                      </span>
                                    </li>
                                    <li>
                                       <strong>Rating :</strong>
                                       <fieldset class="rating1">
                                          <input type="radio" id="star5" name="rating" value="5"  disabled="disabled" checked="checked" />
                                          <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                          <input type="radio" id="star4half" name="rating" value="4 and a half" disabled/>
                                          <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                          <input type="radio" id="star4" name="rating" value="4" disabled/>
                                          <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                          <input type="radio" id="star3half" name="rating" value="3 and a half" disabled/>
                                          <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                          <input type="radio" id="star3" name="rating" value="3" disabled/>
                                          <label class="full" for="star3" title="Meh - 3 stars"></label>
                                          <input type="radio" id="star2half" name="rating" value="2 and a half" disabled/>
                                          <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                          <input type="radio" id="star2" name="rating" value="2" disabled/>
                                          <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                          <input type="radio" id="star1half" name="rating" value="1 and a half" disabled/>
                                          <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                          <input type="radio" id="star1" name="rating" value="1" disabled/>
                                          <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                          <input type="radio" id="starhalf" name="rating" value="half" disabled/>
                                          <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                       </fieldset>
                                       <span class="badge badge-primary1 r-badge">5.0</span>
                                    </li>
                                 </ul>
                                 <button class="btn btn-raised demo-ac">Open Demo Account <i class="fa fa-chevron-circle-right"></i></button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Broker Info Table End -->
                     <!-- Top Brokers -->
                     <div class="col-lg-28 col-md-6 tablet-4 sm-mt-1 md-pl-1-half">
                      <h2 class="top-broker-header">Top FXTM Brokers</h2>
                        <table class="top-broker-table review-detail">
                           <tbody>
                              <tr>
                                 <td class="text-success">
                                  <div class="position-relative-align">
                                  <i class="fa fa-star"></i>
                                  <span>1</span>
                                  </div>
                                </td>
                                 <td>
                                    <div class="table-broker-img glass">
                                      <img src="assets/img/broker/FXCC_FXBNP.png" alt="FXCC_FXBNP">
                                    </div>
                                 </td>
                                 <td><a href="javascript:void(0)">FXTM</a></td>
                                 <td class="review"><a href="javascript:void(0)">Review</a></td>
                              </tr>
                              <tr>
                                 <td class="text-info">
                                  <div class="position-relative-align">
                                  <i class="fa fa-star"></i>
                                  <span>2</span>
                                </div>
                                </td>
                                 <td>
                                  <div class="table-broker-img glass">
                                    <img src="assets/img/broker/ironfx-logo.jpg" alt="ironfx-logo">
                                  </div>
                                 </td>
                                 <td><a href="javascript:void(0)">AvaTrade</a></td>
                                 <td class="review"><a href="javascript:void(0)">Review</a></td>
                              </tr>
                              <tr>
                                 <td class="text-warning">
                                  <div class="position-relative-align">
                                  <i class="fa fa-star"></i>
                                  <span>3</span>
                                </div>
                                </td>
                                 <td>
                                  <div class="table-broker-img glass">
                                    <img src="assets/img/broker/Pepperstone.png" alt="Pepperstone">
                                  </div>
                                 </td>
                                 <td><a href="javascript:void(0)">FXCM</a></td>
                                 <td class="review"><a href="javascript:void(0)">Review</a></td>
                              </tr>
                           </tbody>
                        </table>
                        <p class="top-broker-footer"><a href="broker-review.html">Read More Broker Review</a></p>
                     </div>
                     <!-- Top Brokers End -->
                  </div>
               <!-- Broker Detail Header Parts End -->
               <!-- Video And Highlighted Reviews -->
               <div class="row mt-1">
                  <!-- Video Player Div -->
                  <div class="col-lg-8 col-md-7 md-pr-1-half">
                     <div id="videoPlayerDiv"></div>
                  </div>
                  <!-- Video Player Div End -->
                  <!-- Highlighted Review -->
                  <div class="col-lg-4 col-md-5 sm-mt-1">
                     <div class="row">
                        <div class="col-md-12 md-pl-0">
                           <div class="panel panel-highlighted-news no-mb">
                              <div class="panel-heading">
                                 <span class="glyphicon glyphicon-list-alt"></span>
                                 <span class="head text-uppercase">Recent Press Release</span>
                              </div>
                              <div class="panel-body highlighted-news-body">
                                 <div class="row">
                                    <ul class="brok news-ticker-images featured-news">
                                       <li class="news-item">
                                          <div class="time-date">
                                             <span>
                                             <span class="color-medium-dark font-custum-weight text-uppercase">April 15, 2015 </span>
                                             </span>
                                             <span>
                                             <i class="zmdi zmdi-time  color-info"></i>
                                             <span class="color-medium-dark font-custum-weight">5:45 PM</span>
                                             <span class="text-uppercase font-custum-weight">
                                             <span class="mr-1-half color-info">source : </span>
                                             <a href="javacript:void(0)" class="news-source"> Live Squawk</a>
                                             </span>
                                             </span>
                                          </div>
                                          <a href="javascript:void(0)" class="fw-0">
                                          Best Trading Signal Strategy For Trading of forex learner and beginner to learn trade in a efficient way </a>
                                       </li>
                                       <li class="news-item">
                                          <div class="time-date">
                                             <span>
                                             <span class="color-medium-dark font-custum-weight text-uppercase">April 15, 2015 </span>
                                             </span>
                                             <span>
                                             <i class="zmdi zmdi-time  color-info"></i>
                                             <span class="color-medium-dark font-custum-weight">5:45 PM</span>
                                             <span class="text-uppercase font-custum-weight">
                                             <span class="mr-1-half color-info">source : </span>
                                             <a href="javacript:void(0)" class="brok news-source"> Live Squawk</a>
                                             </span>
                                             </span>
                                          </div>
                                          <a href="javascript:void(0)">
                                          Best Trading Signal Strategy For Trading of forex learner and beginner to learn trade in a efficient way </a>
                                       </li>
                                       <li class="news-item">
                                          <div class="time-date">
                                             <span>
                                             <span class="color-medium-dark font-custum-weight text-uppercase">April 15, 2015 </span>
                                             </span>
                                             <span>
                                             <i class="zmdi zmdi-time  color-info"></i>
                                             <span class="color-medium-dark font-custum-weight">5:45 PM</span>
                                             <span class="text-uppercase font-custum-weight">
                                             <span class="mr-1-half color-info">source : </span>
                                             <a href="javacript:void(0)" class="brok news-source"> Live Squawk</a>
                                             </span>
                                             </span>
                                          </div>
                                          <a href="javascript:void(0)" class="fw-0">
                                          Best Trading Signal Strategy For Trading of forex learner and beginner to learn trade in a efficient way </a>
                                       </li>
                                       <li class="news-item">
                                          <div class="time-date">
                                             <span>
                                             <span class="color-medium-dark font-custum-weight text-uppercase">April 15, 2015 </span>
                                             </span>
                                             <span>
                                             <i class="zmdi zmdi-time  color-info"></i>
                                             <span class="color-medium-dark font-custum-weight">5:45 PM</span>
                                             <span class="text-uppercase font-custum-weight">
                                             <span class="mr-1-half color-info">source : </span>
                                             <a href="javacript:void(0)" class="brok news-source"> Live Squawk</a>
                                             </span>
                                             </span>
                                          </div>
                                          <a href="javascript:void(0)" class="fw-0">
                                          Best Trading Signal Strategy For Trading of forex learner and beginner to learn trade in a efficient way </a>
                                       </li>
                                       <li class="news-item">
                                          <div class="time-date">
                                             <span>
                                             <span class="color-medium-dark font-custum-weight text-uppercase">April 15, 2015 </span>
                                             </span>
                                             <span>
                                             <i class="zmdi zmdi-time  color-info"></i>
                                             <span class="color-medium-dark font-custum-weight">5:45 PM</span>
                                             <span class="text-uppercase font-custum-weight">
                                             <span class="mr-1-half color-info">source : </span>
                                             <a href="javacript:void(0)" class="brok news-source"> Live Squawk</a>
                                             </span>
                                             </span>
                                          </div>
                                          <a href="javascript:void(0)" class="fw-0">
                                          Best Trading Signal Strategy For Trading of forex learner and beginner to learn trade in a efficient way </a>
                                       </li>
                                       <li class="news-item">
                                          <div class="time-date">
                                             <span>
                                             <span class="color-medium-dark font-custum-weight text-uppercase">April 15, 2015 </span>
                                             </span>
                                             <span>
                                             <i class="zmdi zmdi-time  color-info"></i>
                                             <span class="color-medium-dark font-custum-weight">5:45 PM</span>
                                             <span class="text-uppercase font-custum-weight">
                                             <span class="mr-1-half color-info">source : </span>
                                             <a href="javacript:void(0)" class="brok news-source"> Live Squawk</a>
                                             </span>
                                             </span>
                                          </div>
                                          <a href="javascript:void(0)" class="fw-0">
                                          Best Trading Signal Strategy For Trading of forex learner and beginner to learn trade in a efficient way </a>
                                       </li>
                                       <li class="news-item">
                                          <div class="time-date">
                                             <span>
                                             <span class="color-medium-dark font-custum-weight text-uppercase">April 15, 2015 </span>
                                             </span>
                                             <span>
                                             <i class="zmdi zmdi-time  color-info"></i>
                                             <span class="color-medium-dark font-custum-weight">5:45 PM</span>
                                             <span class="text-uppercase font-custum-weight">
                                             <span class="mr-1-half color-info">source : </span>
                                             <a href="javacript:void(0)" class="brok news-source"> Live Squawk</a>
                                             </span>
                                             </span>
                                          </div>
                                          <a href="javascript:void(0)" class="fw-0">
                                          Best Trading Signal Strategy For Trading of forex learner and beginner to learn trade in a efficient way </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="panel-footer">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Highlighted Review End -->
               </div>
               <!-- Video And Highlighted Reviews End -->
               <!-- Broker Tabs -->
               <div class="forex-broker-info mt-1 mb-1">
                  <ul class="custum-nav-indicator slave-sm-none nav nav-tabs nav-tabs-transparent indicator-primary market-panal-bg review-detail" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link withoutripple active" href="#Glance" aria-controls="cat" role="tab" data-toggle="tab">
                        <i class="fa fa-exclamation-circle no-mr"></i> <span class="d-none d-sm-inline text-uppercase">FXTM at a glance</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link withoutripple" href="#Review"  aria-controls="cat1" role="tab" data-toggle="tab">
                        <i class="fa fa-certificate no-mr"></i> <span class="d-none d-sm-inline text-uppercase">Review </span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link withoutripple" href="#pros-cons" aria-controls="cat2" role="tab" data-toggle="tab">
                        <i class="fa fa-deviantart no-mr"></i> <span class="d-none d-sm-inline text-uppercase">Pros & Cons </span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link withoutripple" href="#User-Reviews" aria-controls="cat2" role="tab" data-toggle="tab">
                        <i class="fa fa-star-half-o no-mr"></i> <span class="d-none d-sm-inline text-uppercase">User Reviews </span>
                        </a>
                     </li>
                  </ul>
                  <div class="panel-body">
                     <div class="tab-content">
                        <!-- Broker Review Table Tab -->
                        <div role="tabpanel" class="tab-pane active show fade" id="Glance">
                           <div class="broker-full-review-table-container">
                              <table class="broker-full-review-table mt-1">
                                 <tbody>
                                    <tr>
                                       <td colspan="2">COMPANY INFORMATION</td>
                                       <td colspan="2">ACCOUNT INFORMATION</td>
                                    </tr>
                                    <tr>
                                       <td>Broker Name</td>
                                       <td>Triple A Experts Investment Services S.A</td>
                                       <td>Segregated Account</td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td>Website</td>
                                       <td>www.aaafx.com</td>
                                       <td>Islamic Account</td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td>Headquartered In</td>
                                       <td>14 Akti Kondyli Str, Piraeus, 18545, Greece</td>
                                       <td>Institutional Account </td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td>Founded In</td>
                                       <td>2008</td>
                                       <td>VIP Service</td>
                                       <td>No</td>
                                    </tr>
                                    <tr>
                                       <td>Regulating Authority</td>
                                       <td>HCMC in Greece (#2/540/17.2.2010), MiFID</td>
                                       <td>PAMM / MAM Account</td>
                                       <td>MAM</td>
                                    </tr>
                                    <tr>
                                       <td>US Clinets Accepted</td>
                                       <td>No</td>
                                       <td>Depoist Option</td>
                                       <td>Credit/Debit Card, Bank Wire, Skrill, GiroPay, QIWI, Przelewy, BPS etc ( Check Here)</td>
                                    </tr>
                                    <tr>
                                       <td>Broker Status</td>
                                       <td>Independent Broker</td>
                                       <td>Withdrawal Option</td>
                                       <td>Credit/Debit Card, Bank Wire, Skrill, GiroPay, QIWI, Przelewy, BPS etc</td>
                                    </tr>
                                    <tr>
                                       <td>Broker Type</td>
                                       <td>DMA/STP</td>
                                       <td colspan="2">TRADING TERMS</td>
                                    </tr>
                                    <tr>
                                       <td>Telephone Number</td>
                                       <td>(+30) 213-0176-380</td>
                                       <td>Trading Platform</td>
                                       <td>MT4, ZuluTrade</td>
                                    </tr>
                                    <tr>
                                       <td>Fax Number</td>
                                       <td>——-</td>
                                       <td>Precision Pricing</td>
                                       <td>5 Digits</td>
                                    </tr>
                                    <tr>
                                       <td>Email Support</td>
                                       <td>support@aaafx.com</td>
                                       <td>Type of Spread</td>
                                       <td>Floating</td>
                                    </tr>
                                    <tr>
                                       <td>International Office</td>
                                       <td>Greece</td>
                                       <td>Commission</td>
                                       <td>No</td>
                                    </tr>
                                    <tr>
                                       <td>Web Site Language</td>
                                       <td>Multi Lingual</td>
                                       <td>Scalping</td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td colspan="2">ACCOUNT INFORMATION</td>
                                       <td>Hedging</td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td>Free Demo Account</td>
                                       <td>Yes</td>
                                       <td>Expert Advisors</td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td>Min. Deposit</td>
                                       <td>$300</td>
                                       <td>Lowest spread</td>
                                       <td>Lowest spread on EURUSD 0.4 Pips</td>
                                    </tr>
                                    <tr>
                                       <td>ECN Deposit</td>
                                       <td>No</td>
                                       <td>Trading Instruments</td>
                                       <td>Metals, Oil, Gold, Indices, Stocks, Commodities, Forex, CFDs, Options, Binary Trading</td>
                                    </tr>
                                    <tr>
                                       <td>Account Currency</td>
                                       <td>USD, EUR, GBP, JPY, CHF, AUD</td>
                                       <td>One Click Execution</td>
                                       <td>No</td>
                                    </tr>
                                    <tr>
                                       <td>Maximum Leverage</td>
                                       <td>200:1</td>
                                       <td>OCO Orders</td>
                                       <td>No</td>
                                    </tr>
                                    <tr>
                                       <td>Minimul Order Vol.</td>
                                       <td>0.01</td>
                                       <td>Managed Account</td>
                                       <td>No</td>
                                    </tr>
                                    <tr>
                                       <td colspan="2">TRADING TERMS</td>
                                       <td>Email Alerts</td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td>Interest on Margin</td>
                                       <td>No</td>
                                       <td>Mobile Alerts</td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td>OS Compatibility</td>
                                       <td>Mac, Windows, Mobile, Web, iPhone, iPad</td>
                                       <td>Trailing Stops</td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td>Streaming News Feed</td>
                                       <td>No</td>
                                       <td>Mobile Trading</td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td>Charting Package</td>
                                       <td>Yes</td>
                                       <td>Web Based Trading</td>
                                       <td>Yes (zulutrade)</td>
                                    </tr>
                                    <tr>
                                       <td>Trading Signal</td>
                                       <td>Yes ( ZuluTrade)</td>
                                       <td colspan="2">CUSTOMER SUPPORT</td>
                                    </tr>
                                    <tr>
                                       <td>Market Commentary</td>
                                       <td>No</td>
                                       <td>Customer Support Lang</td>
                                       <td>Multi Lingual</td>
                                    </tr>
                                    <tr>
                                       <td colspan="2">CUSTOMER SUPPORT</td>
                                       <td>Email+Phone support</td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td>Customer Service Hours</td>
                                       <td>24/7</td>
                                       <td>Personal Account Manager</td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td>Place Trades Over the Phone</td>
                                       <td>No</td>
                                       <td>Email Response time</td>
                                       <td>Within 24 hours</td>
                                    </tr>
                                    <tr>
                                       <td colspan="2">PROMOTION</td>
                                       <td colspan="2">PROMOTION</td>
                                    </tr>
                                    <tr>
                                       <td>No Deposit Bonus</td>
                                       <td>No</td>
                                       <td>Trading Tools</td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td>Bonus for First Deposit</td>
                                       <td>10% Bonus on Initial Deposit</td>
                                       <td>Other Promotion</td>
                                       <td>No</td>
                                    </tr>
                                    <tr>
                                       <td>Free VPS</td>
                                       <td>No</td>
                                       <td>Close trade over the phone</td>
                                       <td>Yes</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <!-- Broker Review Table Tab End-->
                        <!-- Broker Review Tab -->
                        <div role="tabpanel" class="tab-pane fade" id="Review">
                           <div class="review-container" id="review-con">
                              <h2>FXTM Review</h2>
                              <p>FXTM or Forex Time, founded in 2011, is still considered a newcomer to the online Forex trading scene. However, within a span of few years, this broker has managed to carve out a name for itself by wining several industry awards such as “Best Newcomer 2013” and “Fastest Growing Forex Broker.” FXTM is regulated by various jurisdictions and has offices in Cyprus, the UK and Belize. Forextime Limited is regulated by CySEC, Forextime UK Limited is authorized by FCA and FT Global Limited is regulated by IFSC.</p>
                              <h3>Accounts</h3>
                              <p>There are two main Forex trading accounts to choose from at FXTM (Standard and ECN Account). There is minimum deposit depending on the account. The Standard accounts are divided into Standard, Cent and Shares account with different contract specifications and minimum deposits. Similarly, the ECN Account is divided into ECN, ECN Zero and FXTMPro Accounts each one with different spreads or commissions.</p>
                              <p>When doing this review I was pleased to see that a demo account is provided for beginner traders who want to practice their trading before putting any of their own money at risk.</p>
                              <p>FXTM has just added a new account to its lineup. As of April, 2016, it is offering an account that specializes in trading CFDs in shares. With the new FXTM Shares Account, traders can select more than 180 US shares with 1:33 leverage on the famous MT4 platform which ensures instant execution. Major corporations such as Apple, Facebook, Alibaba, Twitter and Microsoft are included in the lineup.</p>
                              <p>As of January 2018, FXTM is offering CFD trading on cryptocurrencies under FT Global Limited, with a leverage up to 1:10.</p>
                              <img src="assets/img/city.jpg" alt="City">
                              <h3>Features</h3>
                              <p>Apart from standard Forex pairs, FXTM also offers trading for a range of other financial products such as CFDs on Commodity Futures, and CFDs on spot metals. FXTM recently expanded its product line to currency pairs, including the Chinese Yuan, as well as additional opportunities to trade spot metals paired with major currencies.</p>
                              <p>Through the FXTM Invest program, FXTM offers investors the ability to maximize the value of their time while optimizing their portfolio by following suitable Strategy Managers. There are a range of strategy managers that investors can choose from depending on their risk appetite.</p>
                              <h3>Bonuses/Promotions</h3>
                              <p>FT Global Limited, loves promotions and offers them generously. At the time of this writing, there were few ongoing bonuses for this entiy. There was the Loyalty Cashback (T&Cs apply) as well as the 30% Bonus (T&Cs apply).</p>
                              <p>In addition, anyone switching to FTXM from another broker will receive $4 back for every lot traded (T&Cs apply).</p>
                              <p>Under FT Global Limited, there are also several trading contests. The Wheel of fortune raffle contest (on live accounts) and the FXTM Titan Contest (on demo accounts) – T&Cs apply. No other brokers I’ve reviewed offered a promotion to traders using a demo account so this promotion is truly unique.</p>
                              <p>Forextime Limited and Forextime UK Limited currently offer only the Loyalty Program to its professional and elective professional clients (T&Cs apply).</p>
                              <ul>
                                 <li>FXTM has just added a new account to its lineup. As of April, 2016, it is offering an account that specializes in trading CFDs in shares.</li>
                                 <li>FXTM has just added a new account to its lineup. As of April, 2016, it is offering an account that specializes in trading CFDs in shares.</li>
                                 <li>FXTM has just added a new account to its lineup. As of April, 2016, it is offering an account that specializes in trading CFDs in shares.</li>
                                 <li>FXTM has just added a new account to its lineup. As of April, 2016, it is offering an account that specializes in trading CFDs in shares.</li>
                              </ul>
                           </div>
                        </div>
                        <!-- Broker Review Tab End -->
                        <!-- Pros and cons tab -->
                        <div role="tabpanel" class="tab-pane fade" id="pros-cons">
                           <table class="procon mt-1" id="procon">
                              <thead>
                                 <tr>
                                    <th>Pros</th>
                                    <th>Cons</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>Very popular trading platform known as ZULUTRADE.</td>
                                    <td>During high volatile news time you may get some requotes, slippage, delay trade execution in standard account.</td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <p>Moderate spread in trading account.</p>
                                    </td>
                                    <td>
                                       <p>Minimum investment 300 USD that can be little bit difficult for new trader.</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <p>Very good and friendly customer support that we like very much.</p>
                                    </td>
                                    <td>
                                       <p>Don't have Neteller payment option.</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <p>Segregated accounts, dealing with top tier banks that really very importat issue.</p>
                                    </td>
                                    <td>
                                       <p>Have very few trading platform.</p>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <!-- Pros and cons tab End-->
                        <!-- User Review Tab -->
                        <div role="tabpanel" class="tab-pane fade" id="User-Reviews">
                           <!--Rating Start-->
                           <div class="container-full fixed-gap mt-1">
                              <div class="card text-dark-brown" style="background-color:#f5f5f5;">
                                 <div class="row mr-1 ml-1">
                                    <div class="col-md-4 position-relative text-center pb-1 border-right">
                                       <h2 class="rate-header text-uppercase fw-600">Broker Rating</h2>
                                       <div class="rating-number">5</div>
                                       <div class="rating-stat">
                                          Avarage Rating
                                          <fieldset class="rating1 ratingstar-pos" align="center">
                                             <input type="radio" id="star30" name="rating5" value="5" disabled="disabled" checked="checked" />
                                             <label class="full" for="star30" title="Awesome - 5 stars"></label>
                                             <input type="radio" id="star31half" name="rating5" value="4 and a half" disabled="disabled" />
                                             <label class="half" for="star31half" title="Pretty good - 4.5 stars"></label>
                                             <input type="radio" id="star40" name="rating5" value="4" disabled="disabled" />
                                             <label class="full" for="star40" title="Pretty good - 4 stars"></label>
                                             <input type="radio" id="star41half" name="rating5" value="3 and a half" disabled="disabled" />
                                             <label class="half" for="star41half" title="Meh - 3.5 stars"></label>
                                             <input type="radio" id="star42" name="rating5" value="3" disabled="disabled" />
                                             <label class="full" for="star42" title="Meh - 3 stars"></label>
                                             <input type="radio" id="star42half" name="rating5" value="2 and a half" disabled="disabled" />
                                             <label class="half" for="star42half" title="Kinda bad - 2.5 stars"></label>
                                             <input type="radio" id="star43" name="rating5" value="2" disabled="disabled" />
                                             <label class="full" for="star43" title="Kinda bad - 2 stars"></label>
                                             <input type="radio" id="star43half" name="rating5" value="1 and a half" disabled="disabled" />
                                             <label class="half" for="star43half" title="Meh - 1.5 stars"></label>
                                             <input type="radio" id="star44" name="rating5" value="1" disabled="disabled" />
                                             <label class="full" for="star44" title="Sucks big time - 1 star"></label>
                                             <input type="radio" id="star44half" name="rating5" value="half" disabled="disabled" />
                                             <label class="half" for="star44half" title="Sucks big time - 0.5 stars"></label>
                                          </fieldset>
                                       </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6 col mt-3 status-title">
                                       <div class="progress">
                                          <div class="progress-bar rating-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                             5
                                          </div>
                                       </div>
                                       <div class="progress">
                                          <div class="progress-bar progress-bar-success rating-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 60%">
                                             10
                                          </div>
                                       </div>
                                       <div class="progress">
                                          <div class="progress-bar progress-bar-info rating-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 70%">
                                             2
                                          </div>
                                       </div>
                                       <div class="progress">
                                          <div class="progress-bar progress-bar-warning " role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 0%">
                                             0
                                          </div>
                                       </div>
                                       <div class="progress">
                                          <div class="progress-bar progress-bar-danger rating-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 10%">
                                             5
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-3 md-pl-0">
                                       <div class="rating-pos d-none d-md-block">
                                          <div class="rating-distance">
                                             <fieldset class="rating1 ratingstar-pos1">
                                                <input type="radio" id="star50" name="rating6" value="5" disabled="disabled" checked="checked" />
                                                <label class="full" for="star50" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star50half" name="rating6" value="4 and a half" disabled="disabled" />
                                                <label class="half" for="star50half" title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star51" name="rating6" value="4" disabled="disabled" />
                                                <label class="full" for="star51" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star51half" name="rating6" value="3 and a half" disabled="disabled" />
                                                <label class="half" for="star51half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star52" name="rating6" value="3" disabled="disabled" />
                                                <label class="full" for="star52" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star52half" name="rating6" value="2 and a half" disabled="disabled" />
                                                <label class="half" for="star52half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star53" name="rating6" value="2" disabled="disabled" />
                                                <label class="full" for="star53" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star53half" name="rating6" value="1 and a half" disabled="disabled" />
                                                <label class="half" for="star53half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star54" name="rating6" value="1" disabled="disabled" />
                                                <label class="full" for="star54" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="star54half" name="rating6" value="half" disabled="disabled" />
                                                <label class="half" for="star54half" title="Sucks big time - 0.5 stars"></label>
                                             </fieldset>
                                             100%
                                          </div>
                                          <div class="rating-distance">
                                             <fieldset class="rating1 ratingstar-pos1">
                                                <input type="radio" id="star60" name="rating7" value="5" disabled="disabled" checked="checked" />
                                                <label class="full" for="star60" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star60half" name="rating7" value="4 and a half" disabled="disabled" />
                                                <label class="half" for="star60half" title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star61" name="rating7" value="4" disabled="disabled" />
                                                <label class="full" for="star61" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star61half" name="rating7" value="3 and a half" disabled="disabled" />
                                                <label class="half" for="star61half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star62" name="rating7" value="3" disabled="disabled" />
                                                <label class="full" for="star62" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star62half" name="rating7" value="2 and a half" disabled="disabled" />
                                                <label class="half" for="star62half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star63" name="rating7" value="2" disabled="disabled" />
                                                <label class="full" for="star63" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star63half" name="rating7" value="1 and a half" disabled="disabled" />
                                                <label class="half" for="star63half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star64" name="rating7" value="1" disabled="disabled" />
                                                <label class="full" for="star64" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="star64half" name="rating7" value="half" disabled="disabled" />
                                                <label class="half" for="star64half" title="Sucks big time - 0.5 stars"></label>
                                             </fieldset>
                                             60%
                                          </div>
                                          <div class="rating-distance">
                                             <fieldset class="rating1 ratingstar-pos1">
                                                <input type="radio" id="star70" name="rating8" value="5" disabled="disabled" checked="checked" />
                                                <label class="full" for="star70" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star70half" name="rating8" value="4 and a half" disabled="disabled" />
                                                <label class="half" for="star70half" title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star71" name="rating8" value="4" disabled="disabled" />
                                                <label class="full" for="star71" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star71half" name="rating8" value="3 and a half" disabled="disabled" />
                                                <label class="half" for="star71half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star72" name="rating8" value="3" disabled="disabled" />
                                                <label class="full" for="star72" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star72half" name="rating8" value="2 and a half" disabled="disabled" />
                                                <label class="half" for="star72half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star73" name="rating8" value="2" disabled="disabled" />
                                                <label class="full" for="star73" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star73half" name="rating8" value="1 and a half" disabled="disabled" />
                                                <label class="half" for="star73half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star74" name="rating8" value="1" disabled="disabled" />
                                                <label class="full" for="star74" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="star74half" name="rating8" value="half" disabled="disabled" />
                                                <label class="half" for="star74half" title="Sucks big time - 0.5 stars"></label>
                                             </fieldset>
                                             70%
                                          </div>
                                          <div class="rating-distance">
                                             <fieldset class="rating1 ratingstar-pos1">
                                                <input type="radio" id="star80" name="rating9" value="5" disabled="disabled" checked="checked" />
                                                <label class="full" for="star80" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star80half" name="rating9" value="4 and a half" disabled="disabled" />
                                                <label class="half" for="star80half" title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star81" name="rating9" value="4" disabled="disabled" />
                                                <label class="full" for="star81" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star81half" name="rating9" value="3 and a half" disabled="disabled" />
                                                <label class="half" for="star81half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star82" name="rating9" value="3" disabled="disabled" />
                                                <label class="full" for="star82" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star82half" name="rating9" value="2 and a half" disabled="disabled" />
                                                <label class="half" for="star82half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star83" name="rating9" value="2" disabled="disabled" />
                                                <label class="full" for="star83" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star83half" name="rating9" value="1 and a half" disabled="disabled" />
                                                <label class="half" for="star83half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star84" name="rating9" value="1" disabled="disabled" />
                                                <label class="full" for="star84" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="star84half" name="rating9" value="half" disabled="disabled" />
                                                <label class="half" for="star84half" title="Sucks big time - 0.5 stars"></label>
                                             </fieldset>
                                             0%
                                          </div>
                                          <div class="rating-distance">
                                             <fieldset class="rating1 ratingstar-pos1">
                                                <input type="radio" id="star90" name="rating10" value="5" disabled="disabled" checked="checked" />
                                                <label class="full" for="star90" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star90half" name="rating10" value="4 and a half" disabled="disabled"/>
                                                <label class="half" for="star90half" title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star91" name="rating10" value="4" disabled="disabled" />
                                                <label class="full" for="star91" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star91half" name="rating10" value="3 and a half" disabled="disabled" />
                                                <label class="half" for="star91half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star92" name="rating10" value="3" disabled="disabled" />
                                                <label class="full" for="star92" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star92half" name="rating10" value="2 and a half" disabled="disabled" />
                                                <label class="half" for="star92half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star93" name="rating10" value="2" disabled="disabled" />
                                                <label class="full" for="star93" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star93half" name="rating10" value="1 and a half" disabled="disabled" />
                                                <label class="half" for="star93half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star94" name="rating10" value="1" disabled="disabled" />
                                                <label class="full" for="star94" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="star94half" name="rating10" value="half" disabled="disabled" />
                                                <label class="half" for="star94half" title="Sucks big time - 0.5 stars"></label>
                                             </fieldset>
                                             10%
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--Rating End-->
                           <!--Review Start-->
                           <div class="container-full mt-1-half text-dark-brown">
                              <div class="row mr-1 ml-1">
                                 <div class="col-md-12 master-review">
                                    <h2 class="only-mt-1 fw-600 text-uppercase">Reviews</h2>
                                    <div class="d-inline-flex ratingstar-pos1">
                                       <fieldset class="rating1">
                                          <input type="radio" id="star1100" name="rating113" value="5" />
                                          <label class="full" for="star1100" title="Awesome - 5 stars"></label>
                                          <input type="radio" id="star1100half" name="rating113" value="4 and a half"/>
                                          <label class="half" for="star1100half" title="Pretty good - 4.5 stars"></label>
                                          <input type="radio" id="star1101" name="rating113" value="4"/>
                                          <label class="full" for="star1101" title="Pretty good - 4 stars"></label>
                                          <input type="radio" id="star1101half" name="rating113" value="3 and a half"/>
                                          <label class="half" for="star1101half" title="Meh - 3.5 stars"></label>
                                          <input type="radio" id="star1102" name="rating113" value="3"/>
                                          <label class="full" for="star1102" title="Meh - 3 stars"></label>
                                          <input type="radio" id="star1102half" name="rating113" value="2 and a half"/>
                                          <label class="half" for="star1102half" title="Kinda bad - 2.5 stars"></label>
                                          <input type="radio" id="star1103" name="rating113" value="2"/>
                                          <label class="full" for="star1103" title="Kinda bad - 2 stars"></label>
                                          <input type="radio" id="star1103half" name="rating113" value="1 and a half"/>
                                          <label class="half" for="star1103half" title="Meh - 1.5 stars"></label>
                                          <input type="radio" id="star1104" name="rating113" value="1"/>
                                          <label class="full" for="star1104" title="Sucks big time - 1 star"></label>
                                          <input type="radio" id="star1104half" name="rating11" value="half"/>
                                          <label class="half" for="star1104half" title="Sucks big time - 0.5 stars"></label>
                                       </fieldset>
                                       <span class="badge badge-primary2">5.0</span>
                                    </div>
                                    <input type="text" id="ms-form-user" class="form-control" placeholder="Write a Review">
                                    <a href="javascript:void(0)" class="btn btn-raised btn-primary pull-right">Submit</a>
                                 </div>
                                 <div class="mb-1  container-fluid reviewer">
                                    <div class="row">
                                       <div class="col-md-2 col-12">
                                          <div>
                                             <i class="zmdi zmdi-time mr-1"></i>15 days ago
                                          </div>
                                          <div>FXTUTOR Student</div>
                                       </div>
                                       <div class="col-md-10 col-12 ">
                                          <div class="d-inline-flex ratingstar-pos1">
                                             <fieldset class="rating1">
                                                <input type="radio" id="star100" name="rating11" value="5" disabled="disabled" checked="checked" />
                                                <label class="full" for="star100" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star100half" name="rating11" value="4 and a half" disabled="disabled"/>
                                                <label class="half" for="star100half" title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star101" name="rating11" value="4" disabled="disabled"/>
                                                <label class="full" for="star101" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star101half" name="rating11" value="3 and a half" disabled="disabled"/>
                                                <label class="half" for="star101half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star102" name="rating11" value="3" disabled="disabled"/>
                                                <label class="full" for="star102" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star102half" name="rating11" value="2 and a half" disabled="disabled"/>
                                                <label class="half" for="star102half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star103" name="rating11" value="2" disabled="disabled"/>
                                                <label class="full" for="star103" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star103half" name="rating11" value="1 and a half" disabled="disabled"/>
                                                <label class="half" for="star103half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star104" name="rating11" value="1" disabled="disabled"/>
                                                <label class="full" for="star104" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="star104half" name="rating11" value="half" disabled="disabled"/>
                                                <label class="half" for="star104half" title="Sucks big time - 0.5 stars"></label>
                                             </fieldset>
                                             <span class="badge badge-primary2">5.0</span>
                                          </div>
                                          <p>The Chinese Yuan or Renminbi is still underestimated by a lot of people and also traders in terms of its importance.
                                             Definitely a topic worth learning about and happy that our team has provided this course. Enjoy this free
                                             course!
                                          </p>
                                          <div class="review-reaction ">
                                             <a href="javascript:void(0)">Like</a>
                                             <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalEditCom">Edit</a>
                                             <span>13min</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="mb-1  container-fluid reviewer">
                                    <div class="row">
                                       <div class="col-md-2 col-12">
                                          <div>
                                             <i class="zmdi zmdi-time mr-1"></i>15 days ago
                                          </div>
                                          <div>FXTUTOR Student</div>
                                       </div>
                                       <div class="col-md-10 col-12 ">
                                          <div class="d-inline-flex ratingstar-pos1">
                                             <fieldset class="rating1">
                                                <input type="radio" id="star1001" name="rating111" value="5" disabled="disabled" checked="checked" />
                                                <label class="full" for="star1001" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star1001half" name="rating11" value="4 and a half" disabled="disabled"/>
                                                <label class="half" for="star1001half" title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star1012" name="rating111" value="4" disabled="disabled"/>
                                                <label class="full" for="star1012" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star1012half" name="rating111" value="3 and a half" disabled="disabled"/>
                                                <label class="half" for="star1012half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star1023" name="rating111" value="3" disabled="disabled"/>
                                                <label class="full" for="star1023" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star1023half" name="rating11" value="2 and a half" disabled="disabled"/>
                                                <label class="half" for="star1023half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star1034" name="rating111" value="2" disabled="disabled"/>
                                                <label class="full" for="star1034" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star1034half" name="rating111" value="1 and a half" disabled="disabled"/>
                                                <label class="half" for="star1034half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star1045" name="rating111" value="1" disabled="disabled"/>
                                                <label class="full" for="star1045" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="star1045half" name="rating111" value="half" disabled="disabled"/>
                                                <label class="half" for="star1045half" title="Sucks big time - 0.5 stars"></label>
                                             </fieldset>
                                             <span class="badge badge-primary2">5.0</span>
                                          </div>
                                          <p>The Chinese Yuan or Renminbi is still underestimated by a lot of people and also traders in terms of its importance.
                                             Definitely a topic worth learning about and happy that our team has provided this course. Enjoy this free
                                             course!
                                          </p>
                                          <div class="review-reaction ">
                                             <a href="javascript:void(0)">Like</a>
                                             <a href="javascript:void(0)" data-toggle="modal" data-target="#myModalEditCom">Edit</a>
                                             <span>13min</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--Review End-->
                        </div>
                        <!-- User Review Tab End -->
                     </div>
                  </div>
               </div>
               <!-- Broker Tabs End-->
            </div>
         </div>
         <!-- End Broker Review Detail -->
         <!-- Start Video HTML -->
         <!--  Playlists -->
         <div id="playlists" style="display:none;">
         <li data-source="playlist1" data-playlist-name="BROKER VIDEOS" data-thumbnail-path="{{asset('assets/css/video-styles/thumbnails/large1.jpg')}}">
               <p class="minimalDarkCategoriesTitle"><span class="minimialDarkBold">Title: </span>Broker Videos</p>
               <p class="minimalDarkCategoriesType"><span class="minimialDarkBold">Type: </span>HTML</p>
               <p class="minimalDarkCategoriesDescription"><span class="minimialDarkBold">Description: </span>Created using html elements, videos are loaded and played from the server.</p>
            </li>
         </div>
         <!--  HTML playlist -->
         <ul id="playlist1" style="display:none;">
         <li data-thumb-source="{{asset('assets/css/video-styles/thumbnails/small-rap.jpg')}}" data-video-source="{{asset('assets/css/video-styles/videos2/fwd-1080p.mp4')}}" data-poster-source="{{asset('assets/css/video-styles/posters/mp4-poster.jpg,content/posters/mp4-poster-mobile.jpg')}}" data-start-at-time="00:00:10" data-stop-at-time="00:00:40">
               <div data-video-short-description="">
                  <div>
                     <p class="minimalDarkThumbnailTitle">START / STOP AT TIME EXAMPLE</p>
                     <p class="minimalDarkThumbnailDesc">UVP can be set to start or / and stop at a specified time.</p>
                  </div>
               </div>
               <div data-video-long-description="">
                  <div>
                     <p class="minimalDarkVideoTitleDesc">MP3 STICKY PLAYER</p>
                     <p class="minimalDarkVideoMainDesc">Each video can contain a detailed description, the description can be formatted with CSS as you like. The description window and description button can be disabled individually for each video or globally for all videos.</p>
                     <p class="minimalDarkLink">For more information about this please follow <a href="http://www.webdesign-flash.ro/p/msp/" target="_blank">this link</a></p>
                  </div>
               </div>
            </li>
        <li data-thumb-source="{{asset('assets/css/video-styles/thumbnails/small-rap.jpg')}}" data-video-source="{{asset('assets/css/video-styles/videos2/fwd-1080p.mp4')}}" data-poster-source="{{asset('assets/css/video-styles/posters/mp4-poster.jpg,content/posters/mp4-poster-mobile.jpg')}}" data-start-at-time="00:00:10" data-stop-at-time="00:00:40">
               <div data-video-short-description="">
                  <div>
                     <p class="minimalDarkThumbnailTitle">START / STOP AT TIME EXAMPLE</p>
                     <p class="minimalDarkThumbnailDesc">UVP can be set to start or / and stop at a specified time.</p>
                  </div>
               </div>
               <div data-video-long-description="">
                  <div>
                     <p class="minimalDarkVideoTitleDesc">MP3 STICKY PLAYER</p>
                     <p class="minimalDarkVideoMainDesc">Each video can contain a detailed description, the description can be formatted with CSS as you like. The description window and description button can be disabled individually for each video or globally for all videos.</p>
                     <p class="minimalDarkLink">For more information about this please follow <a href="http://www.webdesign-flash.ro/p/msp/" target="_blank">this link</a></p>
                  </div>
               </div>
            </li>
            <li data-thumb-source="{{asset('assets/css/video-styles/thumbnails/small-rap.jpg')}}" data-video-source="{{asset('assets/css/video-styles/videos2/fwd-1080p.mp4')}}" data-poster-source="{{asset('assets/css/video-styles/posters/mp4-poster.jpg,content/posters/mp4-poster-mobile.jpg')}}" data-start-at-time="00:00:10" data-stop-at-time="00:00:40">
                <div data-video-short-description="">
                  <div>
                     <p class="minimalDarkThumbnailTitle">START / STOP AT TIME EXAMPLE</p>
                     <p class="minimalDarkThumbnailDesc">UVP can be set to start or / and stop at a specified time.</p>
                  </div>
               </div>
               <div data-video-long-description="">
                  <div>
                     <p class="minimalDarkVideoTitleDesc">MP3 STICKY PLAYER</p>
                     <p class="minimalDarkVideoMainDesc">Each video can contain a detailed description, the description can be formatted with CSS as you like. The description window and description button can be disabled individually for each video or globally for all videos.</p>
                     <p class="minimalDarkLink">For more information about this please follow <a href="http://www.webdesign-flash.ro/p/msp/" target="_blank">this link</a></p>
                  </div>
               </div>
            </li>
            <li data-thumb-source="{{asset('assets/css/video-styles/thumbnails/small-rap.jpg')}}" data-video-source="{{asset('assets/css/video-styles/videos2/fwd-1080p.mp4')}}" data-poster-source="{{asset('assets/css/video-styles/posters/mp4-poster.jpg,content/posters/mp4-poster-mobile.jpg')}}" data-start-at-time="00:00:10" data-stop-at-time="00:00:40">
                <div data-video-short-description="">
                  <div>
                     <p class="minimalDarkThumbnailTitle">START / STOP AT TIME EXAMPLE</p>
                     <p class="minimalDarkThumbnailDesc">UVP can be set to start or / and stop at a specified time.</p>
                  </div>
               </div>
               <div data-video-long-description="">
                  <div>
                     <p class="minimalDarkVideoTitleDesc">MP3 STICKY PLAYER</p>
                     <p class="minimalDarkVideoMainDesc">Each video can contain a detailed description, the description can be formatted with CSS as you like. The description window and description button can be disabled individually for each video or globally for all videos.</p>
                     <p class="minimalDarkLink">For more information about this please follow <a href="http://www.webdesign-flash.ro/p/msp/" target="_blank">this link</a></p>
                  </div>
               </div>
            </li>
            <li data-thumb-source="{{asset('assets/css/video-styles/thumbnails/small-rap.jpg')}}" data-video-source="{{asset('assets/css/video-styles/videos2/fwd-1080p.mp4')}}" data-poster-source="{{asset('assets/css/video-styles/posters/mp4-poster.jpg,content/posters/mp4-poster-mobile.jpg')}}" data-start-at-time="00:00:10" data-stop-at-time="00:00:40">
                <div data-video-short-description="">
                  <div>
                     <p class="minimalDarkThumbnailTitle">START / STOP AT TIME EXAMPLE</p>
                     <p class="minimalDarkThumbnailDesc">UVP can be set to start or / and stop at a specified time.</p>
                  </div>
               </div>
               <div data-video-long-description="">
                  <div>
                     <p class="minimalDarkVideoTitleDesc">MP3 STICKY PLAYER</p>
                     <p class="minimalDarkVideoMainDesc">Each video can contain a detailed description, the description can be formatted with CSS as you like. The description window and description button can be disabled individually for each video or globally for all videos.</p>
                     <p class="minimalDarkLink">For more information about this please follow <a href="http://www.webdesign-flash.ro/p/msp/" target="_blank">this link</a></p>
                  </div>
               </div>
            </li>
         </ul>
         <!-- End Video HTML -->
         <!-- Ticker Start -->
         <div class="bottom-broker-container">
        <span class="broker-hover">Broker Section <i class="fa fa-star ml-1-half"></i></span>
         <div class="container-fluid broker-review-carosel" id="ticker">
            <div id="carouselTicker">
               <div class="carouselTicker carouselTicker-start">
                  <ul class="carouselTicker__list text-center ms-margin">
                     <li class="carouselTicker__item ">
                        <div class="fig-container">
                           <figure class="ms-thumbnail ms-thumbnail-left">
                              <img src="assets/img/service/analysis2.jpg" alt="" class="img-fluid">
                              <figcaption class="ms-thumbnail-caption text-center">
                                 <div class="ms-thumbnail-caption-content">
                                    <a href="review-detail.html" target="_blank" class="btn btn-yellow btn-raised">Read Review</a>
                                 </div>
                              </figcaption>
                           </figure>
                           <a href="javascript:void(0)" class="btn btn-yellow btn-raised ropen">Open Account</a>
                        </div>
                     </li>
                     <li class="carouselTicker__item ">
                        <div class="fig-container">
                           <figure class="ms-thumbnail ms-thumbnail-left">
                              <img src="assets/img/service/analysis2.jpg" alt="" class="img-fluid">
                              <figcaption class="ms-thumbnail-caption text-center">
                                 <div class="ms-thumbnail-caption-content">
                                    <a href="review-detail.html" target="_blank" class="btn btn-yellow btn-raised">Read Review</a>
                                 </div>
                              </figcaption>
                           </figure>
                           <a href="javascript:void(0)" class="btn btn-yellow btn-raised ropen">Open Account</a>
                        </div>
                     </li>
                     <li class="carouselTicker__item ">
                        <div class="fig-container">
                           <figure class="ms-thumbnail ms-thumbnail-left">
                              <img src="assets/img/service/analysis2.jpg" alt="" class="img-fluid">
                              <figcaption class="ms-thumbnail-caption text-center">
                                 <div class="ms-thumbnail-caption-content">
                                    <a href="review-detail.html" target="_blank" class="btn btn-yellow btn-raised">Read Review</a>
                                 </div>
                              </figcaption>
                           </figure>
                           <a href="javascript:void(0)" class="btn btn-yellow btn-raised ropen">Open Account</a>
                        </div>
                     </li>
                     <li class="carouselTicker__item ">
                        <div class="fig-container">
                           <figure class="ms-thumbnail ms-thumbnail-left">
                              <img src="assets/img/service/analysis2.jpg" alt="" class="img-fluid">
                              <figcaption class="ms-thumbnail-caption text-center">
                                 <div class="ms-thumbnail-caption-content">
                                    <a href="review-detail.html" target="_blank" class="btn btn-yellow btn-raised">Read Review</a>
                                 </div>
                              </figcaption>
                           </figure>
                           <a href="javascript:void(0)" class="btn btn-yellow btn-raised ropen">Open Account</a>
                        </div>
                     </li>
                     <li class="carouselTicker__item ">
                        <div class="fig-container">
                           <figure class="ms-thumbnail ms-thumbnail-left">
                              <img src="assets/img/service/analysis2.jpg" alt="" class="img-fluid">
                              <figcaption class="ms-thumbnail-caption text-center">
                                 <div class="ms-thumbnail-caption-content">
                                    <a href="review-detail.html" target="_blank" class="btn btn-yellow btn-raised">Read Review</a>
                                 </div>
                              </figcaption>
                           </figure>
                           <a href="javascript:void(0)" class="btn btn-yellow btn-raised ropen">Open Account</a>
                        </div>
                     </li>
                     <li class="carouselTicker__item ">
                        <div class="fig-container">
                           <figure class="ms-thumbnail ms-thumbnail-left">
                              <img src="assets/img/service/analysis2.jpg" alt="" class="img-fluid">
                              <figcaption class="ms-thumbnail-caption text-center">
                                 <div class="ms-thumbnail-caption-content">
                                    <a href="review-detail.html" target="_blank" class="btn btn-yellow btn-raised">Read Review</a>
                                 </div>
                              </figcaption>
                           </figure>
                           <a href="javascript:void(0)" class="btn btn-yellow btn-raised ropen">Open Account</a>
                        </div>
                     </li>
                     <li class="carouselTicker__item ">
                        <div class="fig-container">
                           <figure class="ms-thumbnail ms-thumbnail-left">
                              <img src="assets/img/service/analysis2.jpg" alt="" class="img-fluid">
                              <figcaption class="ms-thumbnail-caption text-center">
                                 <div class="ms-thumbnail-caption-content">
                                    <a href="review-detail.html" target="_blank" class="btn btn-yellow btn-raised">Read Review</a>
                                 </div>
                              </figcaption>
                           </figure>
                           <a href="javascript:void(0)" class="btn btn-yellow btn-raised ropen">Open Account</a>
                        </div>
                     </li>
                     <li class="carouselTicker__item ">
                        <div class="fig-container">
                           <figure class="ms-thumbnail ms-thumbnail-left">
                              <img src="assets/img/service/analysis2.jpg" alt="" class="img-fluid">
                              <figcaption class="ms-thumbnail-caption text-center">
                                 <div class="ms-thumbnail-caption-content">
                                    <a href="review-detail.html" target="_blank" class="btn btn-yellow btn-raised">Read Review</a>
                                 </div>
                              </figcaption>
                           </figure>
                           <a href="javascript:void(0)" class="btn btn-yellow btn-raised ropen">Open Account</a>
                        </div>
                     </li>
                     <li class="carouselTicker__item ">
                        <div class="fig-container">
                           <figure class="ms-thumbnail ms-thumbnail-left">
                              <img src="assets/img/service/analysis2.jpg" alt="" class="img-fluid">
                              <figcaption class="ms-thumbnail-caption text-center">
                                 <div class="ms-thumbnail-caption-content">
                                    <a href="review-detail.html" target="_blank" class="btn btn-yellow btn-raised">Read Review</a>
                                 </div>
                              </figcaption>
                           </figure>
                           <a href="javascript:void(0)" class="btn btn-yellow btn-raised ropen">Open Account</a>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
       </div>
         <!-- Ticker End -->
         <!-- Edit Comment Modal -->
         <div class="modal" id="myModalEditCom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg animated zoomIn animated-3x" role="document">
               <div class="modal-content modal1-bg">
                  <div class="modal-header modal-header-bg-signal">
                        <h3 class="modal-title" id="myModalLabel">Edit Your Comment</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                        <i class="zmdi zmdi-close"></i>
                        </span>
                        </button>
                     </div>
                  <div class="modal-body no-pb">
                                    <form action="" class="review-form form-group field-radius is-empty no-m no-p">
                                       <p class="form-group no-m no-p">
                                          <textarea rows="5" class="form-control form-custom" placeholder="Edit Your Comment" name="edit-comment" ></textarea>
                                       </p>
                                     </form>
                                 </div>
                              
                  
                  <div class="modal-footer">
                        <button type="button" class="btn btn-raised btn-primary-modal mr-1-half" data-dismiss="modal">Update</button>
                        <button type="button" class="btn btn-raised btn-primary-modal" data-dismiss="modal">Close</button>
                     </div>
               </div>
            </div>
         </div>
         <!-- Edit Comment Modal End -->
         <!-- footer -->
         <!-- footer -->
         <footer class="ms-footer">
        <div class="container-fluid mb-footer social-footer">
          <h3 class="social-net-header">Social Networks</h3>
          <div class="no-m">
            <a href="javascript:void(0)" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs no-mr btn-facebook">
            <i class="zmdi zmdi-facebook"></i>
            </a>
            <a href="javascript:void(0)" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs no-mr btn-twitter1">
            <i class="zmdi zmdi-twitter"></i>
            </a>
            <a href="javascript:void(0)" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs no-mr btn-google1">
            <i class="zmdi zmdi-google"></i>
            </a>
            <a href="javascript:void(0)" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs no-mr btn-youtube1">
            <i class="zmdi zmdi-youtube-play"></i>
            </a>
          </div>
        </div>
        <hr class="foot-line">
        <div class="container-fluid">
          <p align="justify">
            <strong style="color:#70BF44" class="text-uppercase">Disclaimer : </strong>FXSUCCESSBD is the first and most popular forex trading platform in Bangla and visited by thousands of forex traders daily from 36 countries of the world. FXSUCCESSBD helps you to learn forex, stock, commodities and cryptocurrency trading in Bangla. FXSUCCESSBD doesn't inspire anyone to trade forex and doesn't show unrealistic dream of 100% profit or getting rich overnight, rather guides existing forex traders about how to maintain a good trading strategy to sustain in the market. Trading forex with leverage carries high risk and you should only invest what you afford to loose. Certain types of trading may not be allowed from Bangladesh.
          </p>
        </div>
      </footer>
      <!--start end footer list-->
      <div class="ms-footer conurl">
        <p>Copyright &copy; FXSUCCESSBD 2018</p>
      </div>
      <!--end end footer list-->
      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
        <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
      </div>
    </div>
    <!-- end footer -->
    <!-- ms-site-container -->
    <div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
      <div class="sb-slidebar-container">
        <header class="ms-slidebar-header">
          <div class="ms-slidebar-title">
            
              <div class="ms-title fxsuccess-logo">
                <a href="index.html">
                  <h1 class="animated fadeInRight animation-delay-6 logo-font text-center">
                    <span class="logo-border"></span>
                    <span class="logo-border"></span>
                    <span class="logo-border"></span>
                    <img src="assets/img/torus.png" alt="Torus" class="torus-img">
                    <span class="fx">FX</span>
                    <span class="position-relative fw-600 cap-pos text-white">SUCCESS
                    <i class="fa fa-graduation-cap"></i></span>
                    <span class="bd">
                    <span class="bd-link"></span>
                    <span class="bd-text">BD</span>
                    </span>
                  </h1>
                </a>
              </div>
            
          </div>
        </header>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
          <li>
            <a class="link" href="index.html">
            <i class="zmdi zmdi-home"></i>Home</a>
          </li>
           <li>
            <a class="link" href="analysis/analysis.html">
            <i class="zmdi zmdi-link"></i>Forex analysis</a>
          </li>
          <li>
            <a class="link" href="article/article.html">
            <i class="zmdi zmdi-link"></i>Forex Article</a>
          </li>
          <li>
            <a class="link" href="forex-signal/forex-signals.html">
            <i class="zmdi zmdi-link"></i>Forex Signal</a>
          </li>
          <li class="card" role="tab" id="sch6">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc6" aria-expanded="false" aria-controls="sc6">
            <i class="fa fa-star"></i>Forex Broker</a>
            <ul id="sc6" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch6" data-parent="#slidebar-menu">
              <li>
                  <a href="broker-review.html">Broker Review</a>
               </li>
            </ul>
          </li>
          <li>
            <a class="link" href="javascript:void(0)">
            <i class="zmdi zmdi-link"></i>Forex Forum</a>
          </li>
          <li>
            <a class="link" href="faq.html">
            <i class="zmdi zmdi-link"></i>FAQ</a>
          </li>
          <li>
            <a class="link" href="contact-us.html">
            <i class="zmdi zmdi-link"></i>Contact</a>
          </li>
        </ul>
        <div class="ms-slidebar-social ms-slidebar-block text-center">
          <div class="ms-slidebar-social">
          <span class="sidebar-social-header">SOCIAL NETWORKS : </span>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-facebook0">
              <i class="zmdi zmdi-facebook"></i>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-twitter">
              <i class="zmdi zmdi-twitter"></i>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-google">
              <i class="zmdi zmdi-google"></i>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-linkedin">
              <i class="zmdi zmdi-linkedin"></i>
              <div class="ripple-container"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
      <!-- Signal Ticker -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <!-- End Signal Ticker -->
    <script src="{{asset('assets/js/plugins.min.js')}}"></script>
      <!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{asset('assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/js/app.min.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>
      <!-- Add Dot Circles To List and Tabels -->
      <script>
         // Add Dot Circle To List
         $(document).ready(function(){
            var i, lis = document.getElementById("review-con").getElementsByTagName("li");
         
           for( i=0; i<lis.length ; i++){
            lis[i].insertAdjacentHTML("afterbegin","<i class='fa fa-dot-circle-o position-relative mr-1-half pull-left' style=' top:5px '></i> ");
           };
         });
         // Add Dot Circle To Table
          $(document).ready(function(){
            var j, table = document.getElementById("procon").getElementsByTagName("td");
            
           for( j=0; j<table.length ; j++){
            table[j].insertAdjacentHTML("afterbegin","<i class='fa fa-dot-circle-o position-relative mr-1-half pull-left' style=' top:2px '></i> ");
           };
           
           
         })
      </script>
      <!-- Add Dot Circles To List and Tabels End -->
      <!-- Table Js -->
      <script>
         $(document).ready(function(){
         
            targetnext = $(".broker-full-review-table td[colspan ='2']").next().css({
               'background-color':'#ffffff',
               'text-transform':'uppercase',
               'font-weight':'700'
            });
         
          $('.broker-full-review-table td').each(function() {
                 var text = $(this).text();
                 if(text == 'No'){
                  $(this).html('<i class="fa fa-times-circle text-danger"></i> No');
                 }
         
                 if(text.substring(0, 3) == 'Yes'){
                  $(this).prepend('<i class="fa fa-check-circle text-success"></i> ');
                 }
             });
            if ($(window).width() <768){
               $('#Glance').css('overflow','auto');
            }
         })
      </script>
      <!-- Table Js End -->
      <!-- Setup video player-->
    <script type="text/javascript" src="{{asset('assets/css/video-styles/java/FWDUVPlayer.js')}}"></script>
      <script type="text/javascript">
         FWDUVPUtils.onReady(function(){
         var yn;
            if($(window).width()<=768){
               yn="no";
            }
            else{
               yn="yes"
            }
            new FWDUVPlayer({    
               //main settings
               instanceName:"player1",
               parentId:"videoPlayerDiv",
               playlistsId:"playlists",
               mainFolderPath:"assets/css/video-styles",
               skinPath:"classic_skin_dark",
               displayType:"responsive",
               initializeOnlyWhenVisible:"no",
               fillEntireVideoScreen:"no",
               privateVideoPassword:"428c841430ea18a70f7b06525d4b748a",
               useHEXColorsForSkin:"no",
               normalHEXButtonsColor:"#FF0000",
               selectedHEXButtonsColor:"#000000",
               useDeepLinking:"yes",
               showPreloader:"yes",
               rightClickContextMenu:"disabled",
               addKeyboardSupport:"yes",
               autoScale:"yes",
               showButtonsToolTip:"yes", 
               stopVideoWhenPlayComplete:"no",
               playAfterVideoStop:"no",
               autoPlay:"no",
               loop:"no",
               shuffle:"no",
               showErrorInfo:"yes",
               maxWidth:2000,
               maxHeight:552,
               volume:.8,
               buttonsToolTipHideDelay:1.5,
               backgroundColor:"#000000",
               videoBackgroundColor:"#000000",
               posterBackgroundColor:"#000000",
               buttonsToolTipFontColor:"#5a5a5a",
               //logo settings
               showLogo:"no",
               hideLogoWithController:"yes",
               logoPosition:"topRight",
               logoLink:"http://www.webdesign-flash.ro/",
               logoMargins:5,
               //playlists/categories settings
               showPlaylistsSearchInput:"no",
               usePlaylistsSelectBox:"yes",
               showPlaylistsButtonAndPlaylists:"no",
               showPlaylistsByDefault:"no",
               thumbnailSelectedType:"opacity",
               startAtPlaylist:0,
               buttonsMargins:0,
               thumbnailMaxWidth:350, 
               thumbnailMaxHeight:350,
               horizontalSpaceBetweenThumbnails:40,
               verticalSpaceBetweenThumbnails:40,
               inputBackgroundColor:"#333333",
               inputColor:"#999999",
               //playlist settings
               showPlaylistButtonAndPlaylist:"yes",
               playlistPosition:"right",
               showPlaylistByDefault:yn,
               showPlaylistName:"yes",
               showSearchInput:"no",
               showLoopButton:"yes",
               showShuffleButton:"yes",
               showNextAndPrevButtons:"yes",
               showThumbnail:"yes",
               forceDisableDownloadButtonForFolder:"yes",
               addMouseWheelSupport:"yes", 
               startAtRandomVideo:"no",
               stopAfterLastVideoHasPlayed:"yes",
               folderVideoLabel:"VIDEO ",
               playlistRightWidth:310,
               playlistBottomHeight:599,
               startAtVideo:0,
               maxPlaylistItems:50,
               thumbnailWidth:70,
               thumbnailHeight:70,
               spaceBetweenControllerAndPlaylist:2,
               spaceBetweenThumbnails:2,
               scrollbarOffestWidth:10,
               scollbarSpeedSensitivity:.5,
               playlistBackgroundColor:"#000000",
               playlistNameColor:"#FFFFFF",
               thumbnailNormalBackgroundColor:"#1b1b1b",
               thumbnailHoverBackgroundColor:"#313131",
               thumbnailDisabledBackgroundColor:"#272727",
               searchInputBackgroundColor:"#000000",
               searchInputColor:"#bdbdbd",
               youtubeAndFolderVideoTitleColor:"#FFFFFF",
               folderAudioSecondTitleColor:"#999999",
               youtubeOwnerColor:"#bdbdbd",
               youtubeDescriptionColor:"#bdbdbd",
               mainSelectorBackgroundSelectedColor:"disable",
               mainSelectorTextNormalColor:"#FFFFFF",
               mainSelectorTextSelectedColor:"#FFFFFF",
               mainButtonBackgroundNormalColor:"#212021",
               mainButtonBackgroundSelectedColor:"#212021",
               mainButtonTextNormalColor:"#FFFFFF",
               mainButtonTextSelectedColor:"#FFFFFF",
               //controller settings
               showController:"yes",
               showControllerWhenVideoIsStopped:"yes",
               showNextAndPrevButtonsInController:"no",
               showPlaybackRateButton:"yes",
               showVolumeButton:"yes",
               showTime:"yes",
               showQualityButton:"yes",
               showInfoButton:"no",
               showDownloadButton:"no",
               showShareButton:"no",
               showEmbedButton:"no",
               showFullScreenButton:"yes",
               disableVideoScrubber:"no",
               repeatBackground:"no",
               controllerHeight:37,
               controllerHideDelay:3,
               startSpaceBetweenButtons:10,
               spaceBetweenButtons:10,
               scrubbersOffsetWidth:2,
               mainScrubberOffestTop:16,
               timeOffsetLeftWidth:2,
               timeOffsetRightWidth:3,
               timeOffsetTop:0,
               volumeScrubberHeight:80,
               volumeScrubberOfsetHeight:12,
               timeColor:"#bdbdbd",
               youtubeQualityButtonNormalColor:"#bdbdbd",
               youtubeQualityButtonSelectedColor:"#FFFFFF",
               //advertisement on pause window
               aopwTitle:"Advertisement",
               aopwWidth:400,
               aopwHeight:240,
               aopwBorderSize:6,
               aopwTitleColor:"#FFFFFF",
               //subtitle
               subtitlesOffLabel:"Subtitle off",
               //popup add windows
               showPopupAdsCloseButton:"yes",
               //embed window and info window
               embedAndInfoWindowCloseButtonMargins:0,
               borderColor:"#333333",
               mainLabelsColor:"#FFFFFF",
               secondaryLabelsColor:"#bdbdbd",
               shareAndEmbedTextColor:"#5a5a5a",
               inputBackgroundColor:"#000000",
               inputColor:"#FFFFFF",
               //loggin
               isLoggedIn:"yes",
               playVideoOnlyWhenLoggedIn:"yes",
               loggedInMessage:"Please login to view this video.",
               //audio visualizer
               audioVisualizerLinesColor:"#0099FF",
               audioVisualizerCircleColor:"#FFFFFF",
               //playback rate / speed
               defaultPlaybackRate:1, //0.25, 0.5, 1, 1.25, 1.2, 2
               //cuepoints
               executeCuepointsOnlyOnce:"no",
               //annotations
               showAnnotationsPositionTool:"no",
               //ads
               openNewPageAtTheEndOfTheAds:"no",
               adsButtonsPosition:"left",
               skipToVideoText:"You can skip to video in: ",
               skipToVideoButtonText:"Skip Ad",
               adsTextNormalColor:"#bdbdbd",
               adsTextSelectedColor:"#FFFFFF",
               adsBorderNormalColor:"#444444",
               adsBorderSelectedColor:"#FFFFFF"
            });
         });
         
      </script>
      <!-- Setup video player end-->
      <!-- Broker New Ticker -->
    <script src="{{asset('assets/js/jquery.bootstrap.newsbox.js')}}"></script>
      <script type="text/javascript">
         $(function () {
            $(".news-ticker-images").bootstrapNews({
               newsPerPage: 4,
               navigation: true,
               autoplay: false, //true
               direction: 'up', // up or down
               animationSpeed: 'normal',
               newsTickerInterval: 4000, //4 secs
               pauseOnHover: true,
               onStop: null,
               onPause: null,
               onReset: null,
               onPrev: null,
               onNext: null,
               onToDo: null
            });
         });
      </script>
      <!-- Broker New Ticker End -->
      <!-- Carosel Ticker -->
    <script src="{{asset('assets/js/jquery.carouselTicker.js')}}"></script>
    <script src="{{asset('assets/js/start.js')}}"></script>
      <script>
         $(".carouselTicker").carouselTicker({
           // animation speed
           speed: 2,
           // animation delay
           delay: 30,
           // RTL or LTR
           reverse: true
         });
      </script>
      <!-- Carosel Ticker End -->
       <!-- FXTM info adjustment for ipad -->
       <script>
          if ($(window).width() == 768){
            $('#d-ipad').addClass('ipad-ac').after('<button class="btn btn-raised demo-ac ipad-ac">Open Demo Account <i class="fa fa-chevron-circle-right"></i></button>');
          }
       </script>
       <!-- FXTM info adjustment for ipad End -->
       
       <script>
        $('.progress-bar').each(function(){
          var progress = $(this).attr('aria-valuenow');
         if(progress<3){
            $(this).css('width','2%');
         }
         })
       </script>

       <script>
         $('.hoverOnLi').each(function(){
        var targetHover = $(this).attr('data-value');
        var text_length = $('.removeadd-'+targetHover+'.regulation span').text().length;
        var lengthCompare;
        if(targetHover == 1){
          lengthCompare = 104;
        }
        else if(targetHover == 2 || targetHover == 4){
          lengthCompare = 15;
        }
        else{
          lengthCompare = 18;
        }
        if(text_length>lengthCompare){
          $(this).hover(function(){
          $('.removeadd-'+targetHover).removeClass('regulation');
          $(this).addClass('text-left').css('line-height','20px');
         },function(){
          $('.removeadd-'+targetHover).addClass('regulation');
          $(this).removeClass('text-left').removeAttr('style');
         })
        }

         })
       </script>
   </body>
</html>