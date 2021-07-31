@extends('layouts.app')

@section('content')


       

        <!-- main content area -->

    <section class="breadcrumb-top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-list breadcrumb-top-list">
                  
                </div><!-- end breadcrumb-list -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-top-bar -->
<!-- ================================
    END BREADCRUMB TOP BAR
================================= -->

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-6 py-0">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-btn">
                        <div class="btn-box">
                        
                        </div>
                        <a class="d-none"
                             data-fancybox="gallery"
                             data-src="images/destination-img2.jpg"
                             data-caption="Showing image - 02"
                             data-speed="700"></a>
                        <a class="d-none"
                             data-fancybox="gallery"
                             data-src="images/destination-img3.jpg"
                             data-caption="Showing image - 03"
                             data-speed="700"></a>
                        <a class="d-none"
                             data-fancybox="gallery"
                             data-src="images/destination-img4.jpg"
                             data-caption="Showing image - 04"
                             data-speed="700"></a>
                    </div><!-- end breadcrumb-btn -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START TOUR DETAIL AREA
================================= -->
<section class="tour-detail-area padding-bottom-90px">
 
    <div class="single-content-box">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="single-content-wrap padding-top-60px">
                        <div id="description" class="page-scroll">
                            <div class="single-content-item pb-4">
                                <h3 class="title font-size-26">{{$trains->origin}} to {{$trains->destination}}</h3>
                                <div class="d-flex align-items-center pt-2">
                                    <p class="mr-2">One way Trip</p>
                                    <p>
                                        <span class="badge badge-warning text-white font-weight-medium font-size-16">No Stop</span>
                                    </p>
                                </div>
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                            <div class="single-content-item py-4">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="single-feature-titles text-center mb-3">
                                            <h3 class="title font-size-15 font-weight-medium">Train Take off</h3>
                                            <span class="font-size-13">{{$trains->depature_time}}</span>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="single-feature-titles text-center mb-3">
                                            <i class="la la-clock-o text-color font-size-22"></i>
                                            <span class="font-size-13 mt-n2">{{$trains->travel_time}}</span>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="single-feature-titles text-center mb-3">
                                            <h3 class="title font-size-15 font-weight-medium">Train Arrive</h3>
                                            <span class="font-size-13">{{$trains->arrival_time}}</span>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-12">
                                        <div class="single-feature-titles text-center border-top border-bottom py-3 mb-4">
                                            <h3 class="title font-size-15 font-weight-medium">Total travel time:<span class="font-size-13 d-inline-block ml-1 text-gray">{{$trains->travel_time}}</span></h3>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-train"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Rail Company</h3>
                                                <span class="font-size-13">{{$trains->rail_company}}</span>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-user"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Ticket Type</h3>
                                                <span class="font-size-13">{{$trains->ticket_class}}</span>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                   
                                    
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-money"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium"> Fees</h3>
                                                <span class="font-size-13">${{$trains->price}}</span>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                </div><!-- end row -->
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                         
                        </div><!-- end description -->
                        <div id="inflight-features" class="page-scroll">
                            <div class="single-content-item padding-top-40px padding-bottom-30px">
                                <h3 class="title font-size-20">Intrain Features</h3>
                               
                                <div class="inflight-content-item pt-4">
                                    <div class="row">
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-wifi"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">WI-FI</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-music"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Entertainment</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-television"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Television</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-tree"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Air Conditioning</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                       
                                     
                                       
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-bed"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Comfort</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-photo"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Magazines</h3>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                    </div><!-- end row -->
                                </div><!-- end inflight-content-item -->
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                        </div><!-- end inflight-features -->
          
                
                    </div><!-- end single-content-wrap -->
                </div><!-- end col-lg-8 -->


              <div class="col-lg-4">
                    <div class="sidebar single-content-sidebar mb-0">
                        <div class="sidebar-widget single-content-widget">
                            <div class="sidebar-widget-item">
                                <div class="sidebar-book-title-wrap mb-3">
                                    <h3>Popular</h3>
                                    <p><span class="text-form">From</span><span class="text-value ml-2 mr-1">${{$trains->ticket_price}}</span> <span class="before-price"></span></p>
                                </div>
                            </div>
                   
                         
                            <div class="btn-box pt-2">
                           <a href="{{ route('singlepage.addToCart', ['id'=>$trains->id])}}" class="theme-btn text-center w-100 mb-2"><i class="la la-shopping-cart mr-2 font-size-18"></i>Book Now</a>                                                         
                            </div>
                        </div>        
                    </div>
                </div>


            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end single-content-box -->
</section><!-- end tour-detail-area -->
<!-- ================================
    END TOUR DETAIL AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
    START RELATE TOUR AREA
================================= -->

<!-- ================================
    END RELATE TOUR AREA
================================= -->



        @endsection