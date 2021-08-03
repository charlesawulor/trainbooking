@extends('layouts.app')

@section('content')


<!-- ================================
    START HERO-WRAPPER AREA
================================= -->

<!-- ================================
    END HERO-WRAPPER AREA
================================= -->

<!-- ================================
    START INFO AREA
================================= -->

<!-- ================================
    END INFO AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
    START ROUND-TRIP AREA
================================= -->


<section class="round-trip-flight section-padding">
    <div class="container">

    @if(count($searchtrip) > 0)	
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title line-height-55">Most Popular Round-trip <br> Flight Destinations</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-12">
               <div class="flight-filter-tab text-center">
                   <div class="section-tab section-tab-3">
                       <ul class="nav nav-tabs justify-content-center" id="myTab4" role="tablist">
                       </ul>
                   </div><!-- end section-tab -->
               </div><!-- end flight-filter-tab -->
               

                <div class="popular-round-trip-wrap padding-top-40px">
                    <div class="tab-content" id="myTabContent4">
                        <div class="tab-pane fade show active" id="new-york" role="tabpanel" aria-labelledby="new-york-tab">
                            <div class="row">



                      
                @foreach($searchtrip as $trip)
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
                                        <p class="deal__meta" style="color:red">{{200-count($searchseat)}} seat(s) left</p>
                                        <div class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span class="price__from mr-1">From</span><span class="price__num">${{$trip->ticket_price}}</span></div>
                                            <a href="singlepage/{{$trip->id}}" class="btn-text">See details<i class="la la-angle-right"></i></a>
                                        </div>
                                    </div><!-- end deal-card -->
                                </div><!-- end col-lg-4 -->

                               

                                @endforeach

                             

                                @else
                   <div class="col-lg-10 responsive-column" style="margin:auto">
                      <div class="card-item ">

                            <div class="card-img">
                           <a href="tour-details.html" class="d-block">
                           <img src="{{asset('assets/images/nigeriatrain.jpg')}}" style="height:200px" alt="Destination-img">
                             </a>
                             <h3 style="margin:auto">Your searched route or travel date didn't return any result.</h3>

                          
                      
                            </div>
                         
                    

                        </div>
                   </div>

                             

                               
                          
                            </div>

                        </div><!-- end tab-pane -->

                     


                  
                   
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->

        @endif

    </div><!-- end container -->
</section><!-- end round-trip-flight -->
<!-- ================================
    END ROUND-TRIP AREA
================================= -->


<!-- ================================
    END CAR AREA
================================= -->


<!-- ================================
    END CTA AREA
================================= -->

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