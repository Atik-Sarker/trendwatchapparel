<div class="nav hidden-xs">
        <div class="logo">
            <a href="{{ URL::to('/') }}"><img src="{{ asset('public/fontEnd') }}/images/logo.png" alt=""></a>
        </div>
        <div class="main-menu">
            <ul class="mtree transit">
                <li><a href="{{ URL::to('/') }}">Home</a> </li>
                <li><a href="{{route('about')}}">About us</a> </li>
                <li><a href="{{route('service')}}">Services</a> </li>
                <li><a href="#">Product</a>
                    <ul>
                      @foreach ($categories as $category)
                      <li><a href="{{ url('category/'.$category->id) }}"> {{$category->name}}</a></li>
                          
                      @endforeach
                    </ul>
                </li>
                <li><a href="{{route('associates')}}">Associates</a></li>
                <li><a href="{{route('contact')}}">Contact Us</a></li>
            </ul>
        </div>
        <!--main menu end-->
        <div class="quick-contact">
            <ul>
                <li>
                    <img src="{{ asset('public/fontEnd') }}/images/phone.png" alt="">
                    <p>+8801712 012 123</p>
                </li>
                <li>
                    <img src="{{ asset('public/fontEnd') }}/images/email.png" alt="">
                    <p>info@trendwatchapparel.com</p>
                </li>
                <li>
                    <img src="{{ asset('public/fontEnd') }}/images/home.png" alt="">
                    <p>Address</p>
                    <p>Ground Floor, House No.: 13 Road: 01, Block: G Rampura Banasree Dhaka: 1219</p>
                </li>
            </ul>
        </div>
        <!--quick contact end-->
        <div class="sidebar-follow">
            <h4 class="sidebar-title">Follow us</h4>
            <ul>
                <li class="facebook"><a href=""><i class="fa fa-facebook"></i></a></li>
                <li class="youtube"><a href=""><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
        <!--quick contact end-->
    </div>
    <!--nav menu-->
    <div class="right-nav hidden-xs">
        <div class="right-nav-image">
            <a href="{{url('/')}}">
                <img src="{{ asset('public/fontEnd') }}/images/profile.png" alt="">
            </a>
        </div>
        <div class="right-nav-logo">
            <a href="{{url('/')}}">
                <img src="{{ asset('public/fontEnd') }}/images/logo.png" alt="">
            </a>
        </div>
        <div class="right-nav-text">
            <p class="right-nav-text-title">TRENDWATCH APPARELS</p>
            <p class="right-nav-text-description">Trendwatch Apparels is a buying, sourcing and manufacturing company oﬀers comprehensive sourcing and supply chain management services to its international buyers of global market. The ultimate solution for sourcing quality textiles, yarn, woven, apparel, knitwear, uniform, home-textile and garment accessories locally from Bangladesh and other South Asisan countries. Trend watch Apparels accentuates the eﬃcient sourcing, eﬀective supply chain, client satisfaction, cost & time eﬀectiveness and ensures on time delivery of quality products</p>
        </div>
    </div>
    <section id="mobile-menu" class="hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <div class="logo2">
                        <a href="{{url('/')}}">
                                <img src="{{ asset('public/fontEnd') }}/images/logo.png" alt="">
                            </a>
                        </div>
                        <ul>
                            <li><a href="index.html">Home</a> </li>
                            <li><a href="about.html">About us</a> </li>
                            <li><a href="service.html">Services</a> </li>
                            <li><a href="#">Product</a>
                            <ul>
                                <li><a href="shop.html"> woven top</a></li>
                                <li><a href="shop.html"> woven bottom</a></li>
                                <li><a href="shop.html"> knitwear top</a></li>
                                <li><a href="shop.html"> knitwear bottom</a></li>
                                <li><a href="shop.html">uniform</a></li>
                                <li><a href="shop.html">home textile</a></li>
                                <li><a href="shop.html">sweater</a></li>
                                <li><a href="shop.html">intimate apparels</a></li>
                                <li><a href="shop.html">hats cap </a></li>
                                <li><a href="shop.html">Socks </a></li>
                            </ul>
                        </li>
                            <li><a href="asosocates.html">Associates</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <!--col end-->
            </div>
            <!--row end-->
        </div>
        <!--container end-->
    </section>
    <!--mobile menu section end-->