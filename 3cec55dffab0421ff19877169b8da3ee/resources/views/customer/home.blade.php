@extends('customer.master')

@section('content')
<!-- Slider -->
<section class="hero-section">
    <div class="hero__slider owl-carousel">
        <div class="hero__item set-bg" data-setbg="{{asset('assets/img/hero/hero-1.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <h5>Jasa pembuatan website mulai dari ....</h5>
                            <h2>Welcome to the best<br /> hosting company</h2>
                            <a href="#" class="primary-btn">Saya mau!</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero__img">
                            <img src="{{asset('assets/img/hero/hero-right.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__item set-bg" data-setbg="{{asset('assets/img/hero/hero-1.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <h5>Starting At Only $ 2.8/month</h5>
                            <h2>Welcome to the best<br /> hosting company</h2>
                            <a href="#" class="primary-btn">Get started now</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero__img">
                            <img src="{{asset('assets/img/hero/hero-right.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__item set-bg" data-setbg="{{asset('assets/img/hero/hero-1.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <h5>Starting At Only $ 2.8/month</h5>
                            <h2>Welcome to the best<br /> hosting company</h2>
                            <a href="#" class="primary-btn">Get started now</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero__img">
                            <img src="{{asset('assets/img/hero/hero-right.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->


<!-- Produk Section Begin -->
<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Produk Kami</h3>
                    <!-- disini nanti ada showcase produk kayak produk" marketplace gitu. utk transaksi bisa langsung di kita ato melalui toped -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services__item">
                    <h5>Shared Hosting</h5>
                    <span>Starts At $1.84</span>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services__item">
                    <h5>Wordpress Hosting</h5>
                    <span>Starts At $1.84</span>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services__item">
                    <h5>Dedicated Hosting</h5>
                    <span>Starts At $1.84</span>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services__item">
                    <h5>SSL certificate</h5>
                    <span>Starts At $1.84</span>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services__item">
                    <h5>Web Hosting</h5>
                    <span>Starts At $1.84</span>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services__item">
                    <h5>Cloud server</h5>
                    <span>Starts At $1.84</span>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Layanan Section Begin -->
<section class="pricing-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7">
                <div class="section-title normal-title">
                    <h3>Layanan init8</h3>
                </div>
            </div>
            <div class="col-lg-5 col-md-5">
                <div class="pricing__swipe-btn">
                    <label for="month" class="active">Web&Apps
                        <input type="radio" id="month">
                    </label>
                    <label for="yearly">IT Support
                        <input type="radio" id="yearly">
                    </label>
                </div>
            </div>
        </div>
        <div class="row monthly__plans active">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <h4>Started</h4>
                    <h3>$15.90 <span>/ month</span></h3>
                    <ul>
                        <li>2,5 GB web space</li>
                        <li>Free site buiding tools</li>
                        <li>Free domain registar</li>
                        <li>24/7 Support</li>
                        <li>Free marketing tool</li>
                        <li>99,9% Services uptime</li>
                        <li>30 day money back</li>
                    </ul>
                    <a href="#" class="primary-btn">Choose plan</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <h4>Business</h4>
                    <h3>$25.90 <span>/ month</span></h3>
                    <ul>
                        <li>90 GB web space</li>
                        <li>Free site buiding tools</li>
                        <li>Free domain registar</li>
                        <li>24/7 Support</li>
                        <li>Free marketing tool</li>
                        <li>99,9% Services uptime</li>
                        <li>30 day money back</li>
                    </ul>
                    <a href="#" class="primary-btn">Choose plan</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <h4>Premium</h4>
                    <h3>$35.90 <span>/ month</span></h3>
                    <ul>
                        <li>150 GB web space</li>
                        <li>Free site buiding tools</li>
                        <li>Free domain registar</li>
                        <li>24/7 Support</li>
                        <li>Free marketing tool</li>
                        <li>99,9% Services uptime</li>
                        <li>30 day money back</li>
                    </ul>
                    <a href="#" class="primary-btn">Choose plan</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <h4>Dedicated</h4>
                    <h3>$45.90 <span>/ month</span></h3>
                    <ul>
                        <li>Unlimited web space</li>
                        <li>Free site buiding tools</li>
                        <li>Free domain registar</li>
                        <li>24/7 Support</li>
                        <li>Free marketing tool</li>
                        <li>99,9% Services uptime</li>
                        <li>30 day money back</li>
                    </ul>
                    <a href="#" class="primary-btn">Choose plan</a>
                </div>
            </div>
        </div>
        <div class="row yearly__plans">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <h4>Started</h4>
                    <h3>$150 <span>/ month</span></h3>
                    <ul>
                        <li>2,5 GB web space</li>
                        <li>Free site buiding tools</li>
                        <li>Free domain registar</li>
                        <li>24/7 Support</li>
                        <li>Free marketing tool</li>
                        <li>99,9% Services uptime</li>
                        <li>30 day money back</li>
                    </ul>
                    <a href="#" class="primary-btn">Choose plan</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <h4>Business</h4>
                    <h3>$250 <span>/ month</span></h3>
                    <ul>
                        <li>90 GB web space</li>
                        <li>Free site buiding tools</li>
                        <li>Free domain registar</li>
                        <li>24/7 Support</li>
                        <li>Free marketing tool</li>
                        <li>99,9% Services uptime</li>
                        <li>30 day money back</li>
                    </ul>
                    <a href="#" class="primary-btn">Choose plan</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <h4>Premium</h4>
                    <h3>$350 <span>/ month</span></h3>
                    <ul>
                        <li>150 GB web space</li>
                        <li>Free site buiding tools</li>
                        <li>Free domain registar</li>
                        <li>24/7 Support</li>
                        <li>Free marketing tool</li>
                        <li>99,9% Services uptime</li>
                        <li>30 day money back</li>
                    </ul>
                    <a href="#" class="primary-btn">Choose plan</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <h4>Dedicated</h4>
                    <h3>$450 <span>/ month</span></h3>
                    <ul>
                        <li>Unlimited web space</li>
                        <li>Free site buiding tools</li>
                        <li>Free domain registar</li>
                        <li>24/7 Support</li>
                        <li>Free marketing tool</li>
                        <li>99,9% Services uptime</li>
                        <li>30 day money back</li>
                    </ul>
                    <a href="#" class="primary-btn">Choose plan</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Section End -->

<!-- Buat testimoni nanti -->
<!-- <section class="achievement-section set-bg spad" data-setbg="{{asset('assets/img/achievement-bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="achievement__item">
                    <span class="fa fa-user-o"></span>
                    <h2 class="achieve-counter">2468</h2>
                    <p>Clients</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="achievement__item">
                    <span class="fa fa-edit"></span>
                    <h2 class="achieve-counter">2468</h2>
                    <p>Domains</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="achievement__item">
                    <span class="fa fa-clone"></span>
                    <h2 class="achieve-counter">2468</h2>
                    <p>Server</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="achievement__item">
                    <span class="fa fa-cog"></span>
                    <h2 class="achieve-counter">2468</h2>
                    <p>Installs</p>
                </div>
            </div>
        </div> 
    </div>
</section>  -->

<!-- Testimoni Section End -->

<!-- Blog -->
<section class="work-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Blog</h3>
                </div>
                <div class="work__text">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="work__item">
                                <i class="fa fa-desktop"></i>
                                <span>CREATE YOUR OWN WEBSITE WITH OUR</span>
                                <h3>WEB SITE BUILDER</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                gravida facilisis. </p>
                                <a href="#" class="primary-btn">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="work__item">
                                <i class="fa fa-shopping-bag"></i>
                                <span>EASY CREATE, MANAGE & SELL</span>
                                <h3>ONLINE STORE</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                gravida facilisis. </p>
                                <a href="#" class="primary-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Work Section End -->

<!-- Choose Plan Section Begin -->
<!-- <section class="choose-plan-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <img src="assets/img/choose-plan.png" alt="">
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="plan__text">
                    <h3>up to 70% discount with free domain name registration included!</h3>
                    <ul>
                        <li><span class="fa fa-check"></span> FREE Domain Name</li>
                        <li><span class="fa fa-check"></span> FREE Email Address</li>
                        <li><span class="fa fa-check"></span> Plently of disk space</li>
                        <li><span class="fa fa-check"></span> FREE Website Bullder</li>
                        <li><span class="fa fa-check"></span> FREE Marketing Tools</li>
                        <li><span class="fa fa-check"></span> 1-Click WordPress Install</li>
                    </ul>
                    <a href="#" class="primary-btn">Get start now</a>
                </div>
            </div>
        </div>
    </div>
</section>  -->
<!-- Choose Plan Section End -->
@stop