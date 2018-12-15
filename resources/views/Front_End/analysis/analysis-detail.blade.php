@extends('Front_End.layout.master')
     @section('content')
      <div class="container-fluid mb-1-half mt-1-half" style="background-color: #f5f5f5">
        <div class="row">
          <div class="col-lg-3 col-sm-6 md-pr-1-half" id="firstdiv">
            <div class="row">
              <!-- Start Left-navigation -->
              <div class="col-lg-12 col-sm-12 order-md-2 order-lg-3">
                <div class="mb-1-half card card-warning1">
                  <div class="card-header conurl" align="center">
                    <h4 class="card-title" style="font-size: 18px">
                      <a role="button ">
                      <span class="text-white">
                      <i class="fa fa-graduation-cap no-mr"></i>
                      <strong class="text-uppercase">Forex School</strong>
                      </span>
                      </a>
                    </h4>
                  </div>
                </div>
                <div class="ms-collapse no-mb" id="accordion5" role="tablist" aria-multiselectable="true">
                    @foreach($newArr as $key=>$val)
                      <?php
                          $tab_val = $loop->index+1;
                      ?>
                      <div class="card card-primary3 lbg3 conurl no-mt mb-1-half">
                        <div class="card-header" role="tab" id="{{$tab_val}}">
                          <h4 class="card-title">
                          <a class="collapsed withripple" role="button" data-toggle="collapse" href="#{{$tab_val}}5" aria-expanded="<?php echo ($tab_val == 1  ? 'true' : 'false') ?>" aria-controls="{{$tab_val}}5">
                            <i class="fa fa-chain-broken"></i> {{$key}}</a>
                          </h4>
                        </div>
                        
                         <div id="{{$tab_val}}5" class="card-collapse collapse <?php echo ($tab_val == 1  ? 'show' : ' ') ?> num-spacing" role="tabpanel" aria-labelledby="{{$tab_val}}" data-parent="#accordion5">
                          <ul>
                            @foreach ($val as $courseid=>$coursetitle)
                            <li>
                              <a class="withripple courseid" id="{{$coursetitle['id']}}" href="{{url('/')}}">
      
                              <span class="list-word-spacing">
                              <i class="fa fa-check-square-o"></i>{{$coursetitle['title']}} </span>
                              </a>
                            </li>
                            @endforeach
                          </ul>
                        </div>
                      
                      </div>
                     @endforeach
                  </div>

                <!-- Top Forex Brokers BEGIN -->
                <div class="position-relative mb-1-half">
                  <h4 class="trading-session-header mt-1-half">Top Forex Brokers</h4>
                  <div class="toggleWrapper">
                    <input type="checkbox" name="forex-brokers" data-value="l1" class="mobileToggle user-toggle" id="forex-brokers" checked="checked">
                    <label for="forex-brokers"></label>
                  </div>
                  <div class="hide-l1">
                      <table class="top-broker-table left-tab">
                          <tbody>
                          @if(!empty($first_broker))
                          <tr>
                            <td class="text-success width-50">
                              <div class="position-relative-align">
                                <i class="fa fa-star"></i>
                                <span>1</span>
                              </div>
                            </td>
                            <td>
                              <div class="table-broker-img glass">
                                <img src="{{url('/brokerimages/'.$first_broker->image)}}" alt="FXCC_FXBNP">
                              </div>
                            </td>
                            <?php
                            $first_broker_top = json_decode($first_broker->broker_info)
                            ?>
                            <td><a href="javascript:void(0)">{{$first_broker_top->broker_name}}</a></td>
                          <td class="review"><a href="{{url('show-broker/'.$first_broker->id)}}">Review</a></td>
                          </tr>
                          @endif
                          @if(!empty($second_broker))
                          <tr>
                            <td class="text-info width-50">
                              <div class="position-relative-align">
                                <i class="fa fa-star"></i>
                                <span>2</span>
                              </div>
                            </td>
                            <td>
                              <div class="table-broker-img glass">
                                <img src="{{url('/brokerimages/'.$second_broker->image)}}" alt="ironfx-logo">
                              </div>
                            </td>
                            <?php
                            $second_broker_top = json_decode($second_broker->broker_info)
                            ?>
                            <td><a href="javascript:void(0)">{{$second_broker_top->broker_name}}</a></td>
                            <td class="review"><a href="{{url('/show-broker/'.$second_broker->id)}}">Review</a></td>
                          </tr>
                          @endif
                          @if(!empty($third_broker))
                          <tr>
                            <td class="text-warning width-50">
                              <div class="position-relative-align">
                                <i class="fa fa-star"></i>
                                <span>3</span>
                              </div>
                            </td>
                            <td>
                              <div class="table-broker-img glass">
                                <img src="{{url('/brokerimages/'.$third_broker->image)}}" alt="Pepperstone">
                              </div>
                            </td>
                            <?php
                            $third_broker_top = json_decode($third_broker->broker_info)
                            ?>
                            <td><a href="javascript:void(0)">{{$third_broker_top->broker_name}}</a></td>
                            <td class="review"><a href="{{url('/show-broker/'.$third_broker->id)}}">Review</a></td>
                          </tr>
                          @endif
                
                          <tr class="footer">
                            <td colspan="4"><a href="{{url('/allbrokers')}}">Read More Broker Review</a></td>
                          </tr>
                          </tbody>
                        </table>
                  </div>
                </div>
                <!-- Top Forex Brokers END -->

              </div>
              <!-- end Left-navigation -->
            </div>
          </div>
          <!-- Hide -->
          <div class="col-lg-6 col-sm-12 md-pl-1-half md-pr-1-half md-mt-1-half" id="seconddiv">
            <div class="mid-content position-relative">
              <i class="fa fa-align-justify side-toggle toggle-pos-new d-none d-lg-pro"></i>
              <header class="title-container">
                <h2 class="forex-header-second"><span>FOREX article detail</span></h2>
              </header>
              <div class="topic-head-title toggled">
              <h2>{{$analysis_detail_data->title}}</h2>
              <div class="border-combo">
                  <p class="line-green"></p>
                  <p class="line-rellow"></p>
                </div>
                <div class="container d-none d-lg-block d-md-block">
                  <div class="share">
                    {{-- <div class="icon first fb"><span class="fa fa-facebook"></span></div>
                    <div class="icon twtr"><span class="fa fa-twitter"></span></div>
                    <div class="icon gplus"><span class="fa fa-google-plus"></span></div>
                    <div class="icon last linkd"><span class="fa fa-linkedin"></span></div> --}}
                    <div class="label">SHARE</div>
                  </div>
                  
                </div>
              </div>
              <div class="post-info">
                <span><i class="zmdi zmdi-account color-yellow"></i> Publish by: </span>
                <span>{{$analysis_detail_data->postedby}}</span>
                
                <span><i class="zmdi zmdi-time color-yellow"></i> 7.18 pm </span>
                <span>{{$analysis_detail_data->created_at}}</span>
              </div>
              <div id="shareRoundIcons"></div>
              <div class="school-content">
                <p>
                    {!!$analysis_detail_data->description!!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col md-pl-1-half" id="thirddiv">
            <div class="row">
              <!-- Start Right-navigation -->
              <div class="col-lg-12 col-md-12 col-sm-12 order-md-2 order-lg-3">
                <div class="row signal-table">
                  <div class="col-md-12 ">
                    <div class="position-relative">
                      <h4 class="trading-session-header">TRADING SESSION</h4>
                      <div class="toggleWrapper">
                        <input type="checkbox" name="toggle1" data-value="1" class="mobileToggle user-toggle" id="toggle1" checked>
                        <label for="toggle1"></label>
                      </div>
                      <div class="hide-1">
                        <table class="downborder1 lbg3 conurl text-left v-middle">
                          <tr class="table table-resonsive lhsize3 ">
                            <td>
                              <img src="../assets/img/flag/aud.jpg" class="banglaimg">Sydeny
                            </td>
                            <td>
                              <span class="badge badge-danger badge-edit">Closed</span>
                            </td>
                            <td class="clocktable text-center no-p"><span id="sydney"></span></td>
                          </tr>
                          <tr class="table table-resonsive lhsize3 ">
                            <td>
                              <img src="../assets/img/flag/tokyo.png" class="banglaimg">Tokyo
                            </td>
                            <td>
                              <span class="badge badge-danger badge-edit">Closed</span>
                            </td>
                            <td class="clocktable text-center no-p"><span id="tokyo"></span></td>
                          </tr>
                          <tr class="table table-resonsive lhsize3 ">
                            <td>
                              <img src="../assets/img/flag/london.png" class="banglaimg">London
                            </td>
                            <td>
                              <span class="badge badge-success badge-edit">Open</span>
                            </td>
                            <td class="clocktable text-center no-p"><span id="london"></span></td>
                          </tr>
                          <tr class="table table-resonsive lhsize3 ">
                            <td>
                              <img src="../assets/img/flag/newyork.png" class="banglaimg">New York
                            </td>
                            <td>
                              <span class="badge badge-warning badge-edit">Closing</span>
                            </td>
                            <td class="clocktable text-center no-p"><span id="newyork"></span></td>
                          </tr>
                          <script type="text/javascript">
                            new showLocalTime("sydney", "Australia/Sydney", "hh:mm:ss A (ddd)")
                            new showLocalTime("tokyo", "Asia/Tokyo", "hh:mm:ss A (ddd)")
                            new showLocalTime("london", "Europe/London", "hh:mm:ss A (ddd)")
                            new showLocalTime("newyork", "America/New_York", "hh:mm:ss A (ddd)")
                          </script>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Analysis -->
                <div class="position-relative">
                  <h4 class="trading-session-header mt-1-half">Market Analysis</h4>
                  <div class="toggleWrapper">
                    <input type="checkbox" name="technical-analysis" data-value="4" class="mobileToggle user-toggle" id="technical-analysis" checked>
                    <label for="technical-analysis"></label>
                  </div>
                  <div class="hide-4">
                    <ul class="custum-nav-indicator master-upper slave-sm-none nav nav-tabs nav-tabs-transparent indicator-primary market-panal-bg" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link withoutripple active" href="#recent" aria-controls="cat" role="tab" data-toggle="tab">
                        <span>Recent</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link withoutripple" href="#popular"  aria-controls="cat1" role="tab" data-toggle="tab">
                        <span>Popular</span>
                        </a>
                      </li>
                    </ul>
                    <div class="panel-body  ">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active show fade" id="recent">
                              <div class="recent-analysis-container" data-simplebar>
                                <ul class="profile-list">
        
                                  @foreach ($recent_analysis as $recentanalysis)
                                  <?php
                                  $analysis = DB::table('visits')->where('visitable_id','=',$recentanalysis->id)->get();
                                  $analysis_com_cntrec = DB::table('comments')->where('analysis_id','=',$recentanalysis->id)->get();
        
                                 ?>
                                      
                                 <li>
                                    <div class="analysis-icon">
                                      <img src="{{url('/upload/images/'.$recentanalysis->image)}}" alt="..." class="pro-img">
                                    </div>
                                    <div class="analysis-discription">
                                      <div class="right-info-container">
                                      <h4 class="profile-name conurl"><a href="{{url('/fxanaysis/'.$recentanalysis->id)}}">{{$recentanalysis->title}}</a></h4>
                                      <p class="discription">{!!str_limit($recentanalysis->description,$limit =25,$end='')!!}</p>
                                        <p class="vc-num">
                                              <span class="bp-view">
                                              <i class="fa fa-comments mr10"></i>
                                              <span id="ip_view"><?php if(!empty($analysis_com_cntrec)){echo count($analysis_com_cntrec);}?></span>
                                              </span>
                                          <span class="bp-view">
                                              <i class="fa fa-eye mr10"></i>
                                          <span id="ip_view"><?php if(!empty($analysis)){echo count($analysis);}?></span>
                                              </span>
                                        </p>
                                      </div>
                                    </div>
                                  </li>
                                  @endforeach
                                 </ul>
                              </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="popular">
                              <div class="recent-analysis-container">
                                  <ul class="profile-list">
                                      @foreach ($show_popular as $popular)
                                        <?php
                                         $analysispop = DB::table('visits')->where('visitable_id','=',$popular->id)->get();
                                         $analysis_com_cntpop = DB::table('comments')->where('analysis_id','=',$popular->id)->get();
                                        ?>
                                       <li>
                                        <div class="analysis-icon">
                                          <img src="{{url('/upload/images/'.$popular->image)}}" alt="..." class="pro-img">
                                        </div>
                                        <div class="analysis-discription">
                                          <div class="right-info-container">
                                            <h4 class="profile-name conurl"><a href="{{url('/fxanaysis/'.$popular->id)}}">{{$popular->title}}</a></h4>
                                            <p class="discription">{!!str_limit($popular->description,$limit =25,$end='')!!}</p>
                                            <p class="vc-num">
                                              <span class="bp-view">
                                              <i class="fa fa-comments mr10"></i>
                                              <span id="ip_view"><?php if(!empty($analysis_com_cntpop)){echo count($analysis_com_cntpop);}?></span>
                                              </span>
                                              <span class="bp-view">
                                              <i class="fa fa-eye mr10"></i>
                                              <span id="ip_view"><?php if(!empty($analysispop)){echo count($analysispop);}?></span>
                                              </span>
                                            </p>
                                          </div>
                                        </div>
                                      </li>
                                      @endforeach
                                    </ul>
                              </div>
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
                <!-- Analysis END -->
                <!-- Top Forex Brokers BEGIN -->
                <div class="position-relative">
                  <h4 class="trading-session-header mt-1-half">Advertisement</h4>
                  <div class="toggleWrapper">
                    <input type="checkbox" name="forex-cross-rates" data-value="5" class="mobileToggle user-toggle" id="forex-cross-rates" checked>
                    <label for="forex-cross-rates"></label>
                  </div>
                  <div class="hide-5">
                   <table class="ad-table">
                                 <tbody>
                                    <tr>
                                       <td colspan="2">
                                          <a href="javascript:void(0)" target="_blank">
                                          <img src="../assets/img/add/best-fxvps.png">
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <a href="javascript:void(0)" target="_blank">
                                          <img src="../assets/img/add/fxsvps.png">
                                          </a>
                                       </td>
                                       <td>
                                          <a href="javascript:void(0)" target="_blank">
                                          <img src="../assets/img/add/fxvpspro.png">
                                          </a>
                                       </td>
                                    </tr>
                                   
                                 </tbody>
                              </table>
                  </div>
                </div>
                <!-- Top Forex Brokers END -->
                <!-- TradingView Widget BEGIN -->
                <div class="position-relative">
                  <h4 class="trading-session-header mt-1-half">Market Summary</h4>
                  <div class="toggleWrapper">
                    <input type="checkbox" name="market-summary" data-value="2" class="mobileToggle user-toggle" id="market-summary">
                    <label for="market-summary"></label>
                  </div>
                  <div class="hide-2 right-widget-hide">
                    <div class="tradingview-widget-container">
                      <div class="tradingview-widget-container__widget"></div>
                      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                        {
                        "showChart": true,
                        "locale": "en",
                        "width": "100%",
                        "height": 500,
                        "largeChartUrl": "",
                        "plotLineColorGrowing": "rgba(60, 188, 152, 1)",
                        "plotLineColorFalling": "rgba(255, 74, 104, 1)",
                        "gridLineColor": "rgba(233, 233, 234, 1)",
                        "scaleFontColor": "rgba(214, 216, 224, 1)",
                        "belowLineFillColorGrowing": "rgba(60, 188, 152, 0.05)",
                        "belowLineFillColorFalling": "rgba(255, 74, 104, 0.05)",
                        "symbolActiveColor": "rgba(242, 250, 254, 1)",
                        "tabs": [
                          {
                            "title": "Indices",
                            "symbols": [
                              {
                                "s": "INDEX:SPX",
                                "d": "S&P 500"
                              },
                              {
                                "s": "INDEX:IUXX",
                                "d": "Nasdaq 100"
                              },
                              {
                                "s": "INDEX:DOWI",
                                "d": "Dow 30"
                              },
                              {
                                "s": "INDEX:NKY",
                                "d": "Nikkei 225"
                              },
                              {
                                "s": "INDEX:DAX",
                                "d": "DAX Index"
                              },
                              {
                                "s": "OANDA:UK100GBP",
                                "d": "FTSE 100"
                              }
                            ],
                            "originalTitle": "Indices"
                          },
                          {
                            "title": "Commodities",
                            "symbols": [
                              {
                                "s": "CME_MINI:ES1!",
                                "d": "E-Mini S&P"
                              },
                              {
                                "s": "CME:E61!",
                                "d": "Euro"
                              },
                              {
                                "s": "COMEX:GC1!",
                                "d": "Gold"
                              },
                              {
                                "s": "NYMEX:CL1!",
                                "d": "Crude Oil"
                              },
                              {
                                "s": "NYMEX:NG1!",
                                "d": "Natural Gas"
                              },
                              {
                                "s": "CBOT:ZC1!",
                                "d": "Corn"
                              }
                            ],
                            "originalTitle": "Commodities"
                          },
                          {
                            "title": "Forex",
                            "symbols": [
                              {
                                "s": "FX:EURUSD"
                              },
                              {
                                "s": "FX:GBPUSD"
                              },
                              {
                                "s": "FX:USDJPY"
                              },
                              {
                                "s": "FX:USDCHF"
                              },
                              {
                                "s": "FX:AUDUSD"
                              },
                              {
                                "s": "FX:USDCAD"
                              }
                            ],
                            "originalTitle": "Forex"
                          }
                        ]
                        }
                      </script>
                    </div>
                  </div>
                </div>
                <!-- TradingView Widget END -->
                <!-- TradingView Widget Calender BEGIN -->
                <style>
                  span.social {
                                border: 1px solid #2653cc;
                                background: #2653cc;
                                color: white;
                                padding: 2px 14px;
                                border-radius: 4px;
                                margin: 8px;
                            }
                          span.sociallink{
                            border: 1px solid #2653cc;
                                background: #2653cc;
                                color: white;
                                padding: 2px 14px;
                                border-radius: 4px;
                                margin: 8px;
                          }
                </style>
                <div class="position-relative">
                  <h4 class="trading-session-header mt-1-half">Economic Calender</h4>
                  <div class="toggleWrapper">
                    <input type="checkbox" name="eco-calender" data-value="3" class="mobileToggle user-toggle" id="eco-calender">
                    <label for="eco-calender"></label>
                  </div>
                  <div class="hide-3 right-widget-hide">
                    <div class="tradingview-widget-container">
                      <div class="tradingview-widget-container__widget"></div>
                      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
                        {
                        "width": "100%",
                        "height": 400,
                        "locale": "en",
                        "importanceFilter": "-1,0,1"
                        }
                      </script>
                    </div>
                  </div>
                </div>
                <!-- TradingView Widget Calender END -->
              </div>
              <!-- end Left-navigation -->
            </div>
          </div>
          <!--Comment Start-->
          <div class="col-lg-12 forex-broker-info mt-1 mb-1-half">
            <div class="container-fluid text-dark-brown mb-1-half">
              <div class="row">
                <div class="col-md-12 master-review">
                  <h2 class="only-mt-1 fw-600 text-uppercase">Comments</h2>
                  <?php 
                   $timestart = Session::get('user_start') ;
                  ?>
                   @if (time() -  $timestart < 300) 
                   <h4 style="color:#3eb7ee">You Can Comment now - <span style="color:#03a9f4;font-weight:bold;">{{Session::get('user_name')}}</span></h4>
                    @else
                     <?php Session::flush();?>
                    <h4 style="color:#3eb7ee">You have to login for commenting---<a href='{{url('/social/facebook/')}}'><span class="social"><i class="fa fa-facebook"></i></span></a>||<a href='{{url('/social/linkedin/')}}'><span class="sociallink"><i class="fa fa-linkedin"></i></span></a></h4>
                   @endif
                  
                {{-- @if (Session::get('user_name')) 
                   <h4 style="color:#3eb7ee">You Can Comment now - <span style="color:#03a9f4;font-weight:bold;">{{Session::get('user_name')}}</span></h4>
                   @else
                   @endif
                   --}}
                 
                {!!Form::open(['url'=>'/socialstore','method' => 'post','enctype'=>'multipart/form-data','id'=>'formcomment'])!!}

                <input type="hidden" id="ms-form-user" name="email" class="form-control umail" value="{{Session::get('user_email')}}" >
                <input type="hidden" id="ms-form-user"  name="analysis_id" class="form-control ana_id" value="{{$analysis_detail_data->id}}">
                <input type="hidden" id="ms-form-user"  name="name" class="form-control u_name" value="{{Session::get('user_name')}}">

                  <input type="text" id="ms-form-user" class="form-control comt" name="comment" placeholder="Write your comment">
                  <button type="submit" id="submitbtn" style="border: 1px solid #03a9f4;" class="btn btn-primary pull-right">Submit</button>
                  {!!Form::close()!!}
                </div>
                <div class="col-md-12" id = "allcomment"> 
                <?php
                   $comments = DB::table('comments')->select('email','id','likes_count','analysis_id','name','comment','created_at')->where('analysis_id','=',$analysis_detail_data->id)->orderBy('id','desc')->get();
                ?>
                
                    @foreach ($comments as $item)
                      <div class="mb-1  container-fluid reviewer">
                      <div class="row">
                        <div class="col-md-2 col-12">
                          <div>
                            <i class="zmdi zmdi-time mr-1"></i>{{$item->created_at}}
                          </div>
                          <div>{{$item->name}}</div>
                        </div>
                        <div class="col-md-10 col-12 ">
                          <p>{!!$item->comment!!}
                          </p>
                          <button  onclick="analysisactOnChirp(event);" data-chirp-id="{{$item->id }}">Like</button>
                          <span  id="likes-count-{{ $item->id }}">{{$item->likes_count }}</span>
                          @if(Session::get('user_email') == $item->email)
                          <a href="" id="{{$item->id}}" class="edit_cmt" style="border:1px solid #ddd;background:#03a9f4;padding:2px 8px;color:#f5f5f5;border-radius: 3px;" data-toggle="modal" data-target="#myModalEditCom">Edit</a>
                          @endif
    
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
                <script src="{{ asset('js/app.js') }}"></script>
              <script>
                 var updateChirpStats = {
                    Like: function (chirpId) {
                        document.querySelector('#likes-count-' + chirpId).textContent++;
                    },
          
                    Unlike: function(chirpId) {
                        document.querySelector('#likes-count-' + chirpId).textContent--;
                    }
                };
          
          
                var toggleButtonText = {
                    Like: function(button) {
                        button.textContent = "Unlike";
                    },
          
                    Unlike: function(button) {
                        button.textContent = "Like";
                    }
                };
          
                var analysisactOnChirp = function (event) {
                    var chirpId = event.target.dataset.chirpId;
                    var action = event.target.textContent;
                    toggleButtonText[action](event.target);
                    updateChirpStats[action](chirpId);
                    $.get('/analysislike/' + chirpId + '/act',
                        { action: action });
                };
                Echo.channel('analysis-events')
                   .listen('ReviewAction', function (event) {
                         console.log(event);
                         var action = event.action;
                         updateChirpStats[action](event.chirpId);
                   });
             </script>

              </div>
            </div>
            <script>

                $('#formcomment').on('submit',function(e){
                  e.preventDefault();
                   var an_email = $('#formcomment').find('.umail').val();
                   var u_name = $('#formcomment').find('.u_name').val();
                  var comt = $('#formcomment').find('.comt').val();
                  //alert(comt);
                 
                if(an_email == '' && u_name == ''){

                  alert('You Have to Login first');

                }else if(comt==''){
                  alert('Please write your comment');
                } else{
                       var data = $(this).serialize();
                        var url = $(this).attr('action');
                        $.post(url,data,function(data){
                           console.log(data);
                          $('#formcomment').trigger('reset');
                          $('#allcomment').load(location.href + ' #allcomment');
                           //$('#allcomment').append('<div class="mb-1  container-fluid reviewer"><div class="row"><div class="col-md-2 col-12"><div><i class="zmdi zmdi-time mr-1"></i>'+data.created_at+'</div><div>'+data.name+'</div></div><div class="col-md-10 col-12 "><p>'+data.comment+'</p><button  onclick="analysisactOnChirp(event);" data-chirp-id="'+data.id+'">Like</button><span  id="likes-count-'+data.id+'">'+data.likes_count+'</span><a href="" id="{{$item->id}}" class="edit_cmt" data-id="'+data.id+'" data-name="'+data.name+'" style="border:1px solid #ddd;background:#03a9f4;padding:2px 8px;color:#f5f5f5;border-radius: 3px;" data-toggle="modal" data-target="#myModalEditCom">Edit</a></div></div></div>');
                        })
                    }
                });
              </script>
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
                        {!!Form::open(['url'=>'/updateanacmt','class'=>'review-form form-group field-radius is-empty no-m no-p','id'=>'ana_cmt'])!!}
                        {{method_field('PATCH')}}
                      <p class="form-group no-m no-p unq">
                        <input type="text" value="" name="ana_cmt_id" class="ana_cmt_id"/>
                       <input type="text" class="analysis_id" value="{{$analysis_detail_data->id}}" name ="ana_id"/>
                        <textarea rows="5" class="form-control form-custom edit-comment" placeholder="Edit Your Comment" name="comment" ></textarea>
                      </p>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-raised btn-primary-modal mr-1-half">Update</button>
                    <button type="button" class="btn btn-raised btn-primary-modal" data-dismiss="modal">Close</button>
                   
                  </div>
                 
                </div>
              </div>
            </div>

            <script>
              $('.edit_cmt').on('click',function(){
                   var cmtid = $(this).attr('id');
                   //confirm("Press a button!");
                    $.get('/analysiseditcmt/'+cmtid,function(data){
                      console.log(data);
                      $('.unq').find('.edit-comment').val(data.comment);
                      $('.unq').find('.ana_cmt_id').val(data.id);
                   });
                 });

                $('#ana_cmt').on('submit',function(e){
                e.preventDefault();
                var data = $(this).serialize();
                var url = $(this).attr('action');
                $.post(url,data,function(data){
                    $('#ana_cmt').trigger('reset');
                    $('#allcomment').load(location.href + ' #allcomment');
                });
             });
          </script>
            
          </div>
          <!--Comment End-->
        </div>
      </div>
    </div>
    <style>
    .jssocials-share-logo {
      color: white;
      font-size: .75em!important;
      width: 0.85em!important;
      }
     .jssocials-share {
        margin: 0.3em 0.3em 0.3em 0!important;
      }
    .share .jssocials-share-link {
    border-radius: 50%;
     }
    </style>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-classic.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-minima.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-plain.css" />

    <script>
        $(".share").jsSocials({
    showLabel: false,
    showCount: false,
    shares: ["twitter", "facebook", "linkedin","googleplus" ]
     });
    </script>
     @endsection
    <!-- Ticker Start -->
@section('ticker_bottom')
  @include('Front_End.layout.includes.ticker_bottom')
@endsection
@section('bottom_script_4')
  @include('Front_End.layout.includes.bottom_script_4')
@endsection
     