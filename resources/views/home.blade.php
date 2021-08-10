@extends('layouts.app')

@section('content')


<!-- ================================
    START HERO-WRAPPER AREA
================================= -->
<section class="hero-wrapper hero-wrapper6">
    <div class="hero-box hero-bg-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" style="margin: auto">
                    <div class="hero-content">
                        <div class="section-heading">
                        <h2 class="sec__title cd-headline slide d-flex align-items-center">
                                It's the Time to
                                <span class="cd-words-wrapper pl-2">
                                <b class="is-visible">discover</b>                             
                                <b>explore</b>
                                <b>travel far</b>
                                <b>meet</b>
                                <b>run away</b>
                                <b>rejuvenate</b>
                                <b>live</b>
                                <b>relax</b>
                                <b>enjoy life</b>
                                </span>
                            </h2>
                        </div>
                    </div><!-- end hero-content -->


                    <div class="tab-content search-fields-container" id="myTabContent">
                        <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                         
                            <div class="tab-content" id="myTabContent3">
                                <div class="tab-pane fade show active" id="one-way" role="tabpanel" aria-labelledby="one-way-tab">
                                    <div class="contact-form-action">
                                        <form  class="row align-items-center" action="{{route('result')}}" method="GET">
                                            <div class="col-lg-6 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Flying from</label>
                                                    <div class="form-group select-contain w-auto">
                                                        <select class="select-contain-select" name="query">
                                                        @if(count($stations) > 0)	
	                                @foreach($stations as $station)  
                                  <option value="{{$station->train_station}}" >{{$station->train_station}}</option>

                                                            @endforeach
                                                            @endif
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">Flying to</label>
                                                    <div class="form-group select-contain w-auto">
                                                        <select class="select-contain-select" name="query1">
                                                        @if(count($stations) > 0)	
	                                @foreach($stations as $station)  
                                  <option value="{{$station->train_station}}" >{{$station->train_station}}</option>

                                                            @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->

                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Departing On</label>
                                                    <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>

                                                    <input class="date-range form-control" type="text" name="daterange-single" readonly >
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->

                                            
                                           
                                         
                                            <div class="col-lg-3">
                                                <button class="theme-btn w-100 text-center margin-top-20px">Search Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- end tab-pane -->



                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path></svg>
    </div>
</section><!-- end hero-wrapper -->
<!-- ================================
    END HERO-WRAPPER AREA
================================= -->

<!-- ================================
    START INFO AREA
================================= -->
<section class="info-area info-bg padding-top-90px padding-bottom-70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Why travel with us?</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-60px">
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb text-color-2">
                        <i class="la la-briefcase"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Bags Travel free</h4>
                        
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb-2 text-color-3">
                        <i class="la la-exchange"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">No change fees</h4>
                       
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb-3 text-color-4">
                        <i class="la la-wifi"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Gate to gate WiFi</h4>
                        
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb-4 text-color-5">
                        <i class="la la-train"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Travel in comfort</h4>
                       
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end info-area -->
<!-- ================================
    END INFO AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
    START ROUND-TRIP AREA
================================= -->
<section class="round-trip-flight section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title line-height-55">Most Popular Route</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-12">
               <div class="flight-filter-tab text-center">
                 
               </div><!-- end flight-filter-tab -->
                <div class="popular-round-trip-wrap padding-top-40px">
                    <div class="tab-content" id="myTabContent4">
                        <div class="tab-pane fade show active" id="new-york" role="tabpanel" aria-labelledby="new-york-tab">
                            <div class="row">

                            @if(count($trains) > 0)	
                @foreach($trains as $trip)
                                <div class="col-lg-4 responsive-column">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="{{asset('assets/images/airline-img.png')}}" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="singlepage/{{$trip->id}}" class="d-flex align-items-center">
                                                {{$trip->origin}}<i class="la la-exchange mx-2"></i>{{$trip->destination}} 
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">Trip Date : {{$trip->travel_date}}</p>
                                        <div class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span class="price__from mr-1">From</span><span class="price__num">${{$trip->ticket_price}}</span></div>
                                            <a href="singlepage/{{$trip->id}}" class="btn-text">See details<i class="la la-angle-right"></i></a>
                                        </div>
                                    </div><!-- end deal-card -->
                                </div><!-- end col-lg-4 -->

                                @endforeach
                                @endif


                               
                            </div>
                        </div><!-- end tab-pane -->

                       
                        
                    </div><!-- end tab-content -->
                   
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end round-trip-flight -->
<!-- ================================
    END ROUND-TRIP AREA
================================= -->

<!-- ================================
    START HOTEL AREA
================================= -->

<!-- ================================
    END HOTEL AREA
================================= -->

<!-- ================================
    START DESTINATION AREA
================================= -->

<!-- ================================
    END DESTINATION AREA
================================= -->

<!-- ================================
    START CAR AREA
================================= -->

<!-- ================================
    END CAR AREA
================================= -->

<!-- ================================
       START TESTIMONIAL AREA
================================= -->
<section class="testimonial-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h2 class="sec__title line-height-50">What our customers are saying us?</h2>
                    
                   
                </div><!-- end section-heading -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-8">
                <div class="testimonial-carousel carousel-action">
                    <div class="testimonial-card">
                        <div class="testi-desc-box">
                            <p class="testi__desc">Easy to use </p>
                        </div>
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="{{asset('assets/images/team8.jpg')}}" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <h4 class="author__title">Leroy </h4>
                               
                                <span class="ratings d-flex align-items-center">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end testimonial-card -->
                    <div class="testimonial-card">
                        <div class="testi-desc-box">
                            <p class="testi__desc">Amazing experience</p>
                        </div>
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="{{asset('assets/images/team9.jpg')}}" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <h4 class="author__title">Richard Pam</h4>
                                <span class="author__meta"></span>
                                <span class="ratings d-flex align-items-center">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end testimonial-card -->
                    <div class="testimonial-card">
                        <div class="testi-desc-box">
                            <p class="testi__desc">Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit anim laborum sint occaecat cupidatat non proident. Occaecat cupidatat non proident des.</p>
                        </div>
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="{{asset('assets/images/team10.jpg')}}" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <h4 class="author__title">Luke Jacobs</h4>
                                <span class="author__meta">Australia</span>
                                <span class="ratings d-flex align-items-center">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end testimonial-card -->
                    <div class="testimonial-card">
                        <div class="testi-desc-box">
                            <p class="testi__desc">Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit anim laborum sint occaecat cupidatat non proident. Occaecat cupidatat non proident des.</p>
                        </div>
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="{{asset('assets/images/team8.jpg')}}" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <h4 class="author__title">Chulbul Panday</h4>
                                <span class="author__meta">Italy</span>
                                <span class="ratings d-flex align-items-center">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end testimonial-card -->
                </div><!-- end testimonial-carousel -->
            </div><!-- end col-lg-8 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end testimonial-area -->
<!-- ================================
       START TESTIMONIAL AREA
================================= -->

<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area padding-top-100px padding-bottom-180px text-center">
    <div class="video-bg">
        <video autoplay loop>
            <source src="{{asset('assets/video/video-bg.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title text-white line-height-55">Let us show you the world <br> Discover our most popular destinations</h2>
                </div><!-- end section-heading -->
                <div class="btn-box padding-top-35px">
                    <a href="become-local-expert.html" class="theme-btn border-0">Join with us</a>
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <svg class="cta-svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M-31.31,170.22 C164.50,33.05 334.36,-32.06 547.11,196.88 L500.00,150.00 L0.00,150.00 Z"></path></svg>
</section><!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->

<!-- ================================
       START BLOG AREA
================================= -->
<section class="blog-area padding-top-30px padding-bottom-90px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title line-height-55">Latest News & Articles <br> You Might Like</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-4 responsive-column">
                <div class="card-item blog-card">
                    <div class="card-img">
                        <img src="{{asset('assets/images/blog-img.jpg')}}" alt="blog-img">
                        <div class="post-format icon-element">
                            <i class="la la-photo"></i>
                        </div>
                        <div class="card-body">
                            <div class="post-categories">
                                <a href="#" class="badge">Travel</a>
                                <a href="#" class="badge">lifestyle</a>
                            </div>
                            <h3 class="card-title line-height-26"><a href="blog-single.html">When Traveling Avoid Expensive Hotels & Resorts</a></h3>
                            <p class="card-meta">
                                <span class="post__date"> 1 January, 2020</span>
                                <span class="post-dot"></span>
                                <span class="post__time">5 Mins read</span>
                            </p>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="{{asset('assets/images/small-team1.jpg')}}" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <a href="#" class="author__title">Leroy Bell</a>
                            </div>
                        </div>
                        <div class="post-share">
                            <ul>
                                <li>
                                    <i class="la la-share icon-element"></i>
                                    <ul class="post-share-dropdown d-flex align-items-center">
                                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item blog-card">
                    <div class="card-img">
                        <img src="{{asset('assets/images/blog-img2.jpg')}}" alt="blog-img">
                        <div class="post-format icon-element">
                            <i class="la la-play"></i>
                        </div>
                        <div class="card-body">
                            <div class="post-categories">
                                <a href="#" class="badge">Video</a>
                            </div>
                            <h3 class="card-title line-height-26"><a href="blog-single.html">My Best Travel Tips: The Ultimate Travel Guide</a></h3>
                            <p class="card-meta">
                                <span class="post__date"> 1 February, 2020</span>
                                <span class="post-dot"></span>
                                <span class="post__time">4 Mins read</span>
                            </p>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="{{asset('assets/images/small-team2.jpg')}}" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <a href="#" class="author__title">Phillip Hunt</a>
                            </div>
                        </div>
                        <div class="post-share">
                            <ul>
                                <li>
                                    <i class="la la-share icon-element"></i>
                                    <ul class="post-share-dropdown d-flex align-items-center">
                                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item blog-card">
                    <div class="card-img">
                        <img src="{{asset('assets/images/blog-img3.jpg')}}" alt="blog-img">
                        <div class="post-format icon-element">
                            <i class="la la-music"></i>
                        </div>
                        <div class="card-body">
                            <div class="post-categories">
                                <a href="#" class="badge">audio</a>
                            </div>
                            <h3 class="card-title line-height-26"><a href="blog-single.html">By all Means, Travel to Popular Sites & Don’t Rule Out Other Locations</a></h3>
                            <p class="card-meta">
                                <span class="post__date"> 1 March, 2020</span>
                                <span class="post-dot"></span>
                                <span class="post__time">3 Mins read</span>
                            </p>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="{{asset('assets/images/small-team3.jpg')}}" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <a href="#" class="author__title">Luke Jacobs</a>
                            </div>
                        </div>
                        <div class="post-share">
                            <ul>
                                <li>
                                    <i class="la la-share icon-element"></i>
                                    <ul class="post-share-dropdown d-flex align-items-center">
                                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box text-center pt-4">
                    <a href="blog-grid.html" class="theme-btn">Read More Post</a>
                </div>
            </div>
        </div>
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
       START BLOG AREA
================================= -->

<!-- ================================
    START MOBILE AREA
================================= -->

<!-- ================================
    END MOBILE AREA
================================= -->

<!-- ================================
       START CLIENTLOGO AREA
================================= -->

<!-- ================================

  @endsection