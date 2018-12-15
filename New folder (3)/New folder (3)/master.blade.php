@include('Front_End.layout.includes.head')
<body>
<div id="ms-preload" class="ms-preload">
    <div id="status">
        <div class="load-new">
            <img src="{{asset('assets/img/loadspin.gif')}}" alt="">
        </div>
    </div>
</div>
<!--header bar-->
@include('Front_End.layout.includes.header_bar')
<!--header bar end-->
<div class="ms-site-container container-bg ">
    <!-- Modal -->
    @include('Front_End.layout.includes.header')
    @include('Front_End.layout.includes.main_nav_bar')
    <!--Stat Header Sliders -->
    @yield('carousel')
    <!-- Ticker Start -->
    @yield('ticker')
    <!-- Ticker End -->
    @yield('content')
    <!-- Ticker Start -->
    @yield('ticker_bottom')
    <!-- Ticker End -->
    @include('Front_End.layout.includes.bottom_script')
    @include('Front_End.layout.includes.bottom_script_3')
    @yield('bottom_script_4')
    @include('Front_End.layout.includes.footer')
</div>
</body>
</html>