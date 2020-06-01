@extends('customer.master')

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__option">
                    <a href="./index.html"><span class="fa fa-home"></span> Home</a>
                    <span>About</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- About Section Begin -->
<section class="about-section <!-- spad -->">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about__img">
                    <img src="{{asset('assets/img/about-us.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__text">
                    <h2>Tentang Init8</h2>
                    <p>Init8 adalah perusahaan yang menyediakan jasa untuk semua kebutuhan IT Anda.
                        Jasa yang kami sediakan: <br>
                        - Pembuatan website dan aplikasi(Android & IoS)<br>
                        - Jasa IT Support untuk perusahaan<br>
                        - Instalasi Network & Server<br> 
                        - Maintenance Hardware dan sebagainya</p>
                    <p>
                        <b>Visi</b> kami adalah untuk menjadi mitra terbaik dan tepercaya untuk semua kebutuhan IT.
                    </p>
                    <p>
                        <b>Misi</b> kami: <br>
                        - Memberikan pengalaman terbaik dari jasa atau produk kami Selalu <br>
                        - <i>Up to date</i> dengan produk atau platform yang kami gunakan <br>
                        - Selalu profesional dan tepat waktu dengan timeline dari project kami.<br>
                    </p>
                   <!--  <div class="about__achievement">
                        <div class="about__achieve__item">
                            <span class="fa fa-user-o"></span>
                            <h4 class="achieve-counter">2468</h4>
                            <p>Clients</p>
                        </div>
                        <div class="about__achieve__item">
                            <span class="fa fa-edit"></span>
                            <h4 class="achieve-counter">2468</h4>
                            <p>Domains</p>
                        </div>
                        <div class="about__achieve__item">
                            <span class="fa fa-clone"></span>
                            <h4 class="achieve-counter">2468</h4>
                            <p>Server</p>
                        </div>
                        <div class="about__achieve__item">
                            <span class="fa fa-cog"></span>
                            <h4 class="achieve-counter">2468</h4>
                            <p>Installs</p>
                        </div>
                    </div> -->
                    <!-- <a href="#" class="primary-btn">Get started now</a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Feature Section Begin -->
<!-- <section class="feature-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Produk Kami</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="feature__item">
                    <span class="fa fa-cloud-upload"></span>
                    <h5>Auto update</h5>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="feature__item">
                    <span class="fa fa-sliders"></span>
                    <h5>Optimized software</h5>
                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="feature__item">
                    <span class="fa fa-database"></span>
                    <h5>Daily backups</h5>
                    <p>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="feature__item">
                    <span class="fa fa-globe"></span>
                    <h5>Wide networking</h5>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="feature__item">
                    <span class="fa fa-shield"></span>
                    <h5>Protected</h5>
                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="feature__item">
                    <span class="fa fa-headphones"></span>
                    <h5>Free support</h5>
                    <p>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Services Section End -->

<!-- Team Section Begin -->
@if(!$company_teams->isEmpty())
<section class="team-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="section-title normal-title">
                    <h3>Team Kami</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="team__btn">
                    <!-- <a href="#" class="primary-btn">Lihat Semua</a> -->
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($company_teams as $key => $team): ?>
                <div class="col-lg-6 col-md-6">
                    <div class="team__item">
                        <div class="team__pic">
                            <img src="{{url('storage').'/'.$team->profile_picture}}" alt="">
                        </div>
                        <div class="team__text">
                            <h5>{{$team->full_name}}</h5>
                            <span>{{$team->job_title}}</span>
                            <p>{{$team->profile_description}}</p>
                            <div class="team__social">
                                <?php foreach ($team->getCompanyTeamSocialMedias as $key => $sc): ?>
                                    <a href="{{$sc->url}}" class="{{$sc->getSocialMedia->social_media_name}}"><i class="fa {{$sc->getSocialMedia->icon}}"></i></a>

                                <?php endforeach ?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
@endif
<!-- Team Section End -->

<!-- Testimonial Section Begin -->

<!-- <section class="testimonial-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Our Client say</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testimonial__slider owl-carousel">
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <img src="{{asset('assets/img/testimonial/testimonial-1.jpg')}}" alt="">
                        <h5>Billie Eilish</h5>
                        <span>Designer</span>
                        <p>Ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labuore
                        et dolore magna aliqua.</p>
                        <div class="testimonial__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <img src="{{asset('assets/img/testimonial/testimonial-2.jpg')}}" alt="">
                        <h5>Billie Eilish</h5>
                        <span>Designer</span>
                        <p>Ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labuore
                        et dolore magna aliqua.</p>
                        <div class="testimonial__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <img src="{{asset('assets/img/testimonial/testimonial-3.jpg')}}" alt="">
                        <h5>Billie Eilish</h5>
                        <span>Designer</span>
                        <p>Ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labuore
                        et dolore magna aliqua.</p>
                        <div class="testimonial__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <img src="{{asset('assets/img/testimonial/testimonial-1.jpg')}}" alt="">
                        <h5>Billie Eilish</h5>
                        <span>Designer</span>
                        <p>Ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labuore
                        et dolore magna aliqua.</p>
                        <div class="testimonial__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <img src="{{asset('assets/img/testimonial/testimonial-2.jpg')}}" alt="">
                        <h5>Billie Eilish</h5>
                        <span>Designer</span>
                        <p>Ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labuore
                        et dolore magna aliqua.</p>
                        <div class="testimonial__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Testimonial Section End -->
<!-- Contact Section Begin -->
<section style="padding-bottom: 100px !important;" class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact__text">
                    <h3>Contact info</h3>

                    <ul>
                        <li>
                            <span class="fa fa-map-marker"></span>
                            <h5>Address</h5>
                            <p>{{setting('site.address')}}</p>
                        </li>
                        <li>
                            <span class="fa fa-mobile"></span>
                            <h5>Address</h5>
                            <p>{{setting('site.phone')}}</p>
                        </li>
                        <li>
                            <span class="fa fa-headphones"></span>
                            <h5>Email</h5>
                            <p>{{setting('site.email')}}</p>
                        </li>
                    </ul>
                    <div class="contact__social">
                        <!-- <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> -->
                        <!--  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> -->
                        <!--  <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a> -->
                        <a href="https://www.instagram.com/init8.id/" class="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- https://developers.google.com/maps/documentation/embed/start -->
                <div class="map">
                    <iframe
                    src="https://www.google.com/maps/embed/v1/place?q=Mall%20Taman%20Palem%20Lantai%20LG%20blok%20B%20no.%2057%20Cengkareng%2C%20Jakarta%20Barat%2011730&key=AIzaSyAdJ-RT-3_vMhKBSYm8bBUX7zWfzzH2rOo" 
                    height="515" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@stop