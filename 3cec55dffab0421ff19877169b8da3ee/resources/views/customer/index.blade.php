<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Deerhost Template">
    <meta name="keywords" content="Deerhost, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{setting('site.title')}}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas__menu__overlay"></div>
    <div class="offcanvas__menu__wrapper">
        <div class="canvas__close">
            <span class="fa fa-times-circle-o"></span>
        </div>
        <div class="offcanvas__logo">
            <a href="#"><img src="{{url('storage/').'/'.setting('site.logo')}}" alt=""></a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
               
                <li><a href="./hosting.html">Produk</a></li>
                <li><a href="#">Layanan</a>
                    <ul class="dropdown">
                        <li><a href="./pricing.html">Website dan Aplikasi</a></li>
                        <li><a href="./blog-details.html">IT Support</a></li>
                        <!-- <li><a href="./404.html"></a></li>-->
                    </ul>
                </li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./about.html">About</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <ul>
                <li><a href="#"><span class="icon_chat_alt"></span> Live chat</a></li>
                <li><a href="#"><span class="fa fa-user"></span> Login / Register</a></li>
            </ul>
        </div>
        <div class="offcanvas__info">
            <ul>
                <!--        <li><span class="icon_phone"></span> +62 8788-7460-528</li> -->
                <li><span class="fa fa-envelope"></span>{{setting('site.email')}}</li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header__info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__info-left">
                            <ul>
                               <!--                       <li><span class="icon_phone"></span> +62 8788-7460-528</li> -->
                               <li><span class="fa fa-envelope"></span> {{setting('site.email')}}</li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6">
                    <div class="header__info-right">
                        <ul>
                         <li><a href="#"><span class="icon_chat_alt"></span> Cek progress</a></li>
                         <li><a href="#"><span class="icon_chat_alt"></span> Live chat</a></li>
                         <li><a href="#"><span class="fa fa-user"></span> Login / Register</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <div class="header__logo">
                <a href="./index.html"><img src="{{url('storage/').'/'.setting('site.logo')}}" alt=""></a>
            </div>
        </div>
        <div class="col-lg-9 col-md-9">
            <nav class="header__menu">
                {{menu('sites-menu','customer.main_menu')}}
              
            </nav>
        </div>
    </div>
    <div class="canvas__open">
        <span class="fa fa-bars"></span>
    </div>
</div>
</header>
<!-- Header End -->

<!-- Hero Section Begin -->
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


<!-- Services Section Begin -->
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

<!-- Pricing Section Begin -->
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
<section class="achievement-section set-bg spad" data-setbg="{{asset('assets/img/achievement-bg.jpg')}}">
    <div class="container">
         <!--   <div class="row">
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
            </div>-->
        </div>
    </section> 
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
    <section class="choose-plan-section spad">
        <div class="container">
           <!--  <div class="row">
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
            </div> -->
        </div>
    </section> 
    <!-- Choose Plan Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="footer__top">
            <!--    <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top-call">
                            <h5>Need Help? Call us</h5>
                            <h2>+1 175 946 2316 096</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top-auth">
                            <h5>Join Now And Have Free Month Of Deluxe Hosting</h5>
                            <a href="#" class="primary-btn">Log in</a>
                            <a href="#" class="primary-btn sign-up">Sign Up</a>
                        </div>
                    </div>
                </div>-->
            </div> 
        </div>
        <div class="footer__text set-bg" data-setbg="{{asset('assets/img/footer-bg.png')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer__text-about">
                            <div class="footer__logo">
                                <a href="./index.html"><img src="{{url('storage/').'/'.setting('site.logo')}}" alt=""></a>
                            </div>
                            <p>Kami hadir untuk menjawab segala kebutuhan IT Anda. Mulai dari : pembuatan website, aplikasi (IOS dan Android), IT Troubleshoot, Server, dan sampai kebutuhan Network Anda. </p>
                            <div class="footer__social">
                           <!--     <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>  -->
                                <a href="https://www.instagram.com/init8.id/"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer__text-widget">
                         <!--     <h5>Company</h5> -->
                          <!--       <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Press & Media</a></li>
                                <li><a href="#">News / Blogs</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>-->
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer__text-widget">
                            <h5>Produk dan Layanan</h5>
                          <!--     <ul>
                                <li><a href="#">Produk Kami</a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#">VPS Hosting</a></li>
                                <li><a href="#">Dedicated Servers</a></li>
                                <li><a href="#">Cloud Hosting</a></li>
                            </ul>-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer__text-widget">
                            <h5>Kontak Kami</h5>
                            <ul class="footer__widget-info">
                                <li><span class="fa fa-map-marker"></span> {{setting('site.address')}}</li>
                                <li><span class="fa fa-mobile"></span> 0878-8746-0528 | 0812-8450-1574</li>
                                <li><span class="fa fa-headphones"></span> {{setting('site.email')}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__text-copyright">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with by Init8</a>
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                  </div>
              </div>
          </div>
      </footer>
      <!-- Footer Section End -->

      <!-- Js Plugins -->
      <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('assets/js/jquery.slicknav.js')}}"></script>
      <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('assets/js/main.js')}}"></script>
  </body>

  </html>