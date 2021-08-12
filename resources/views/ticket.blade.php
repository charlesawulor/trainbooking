@extends('layouts.app')

@section('content')


<!-- ================================
    START BREADCRUMB AREA
================================= -->

<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START BOOKING AREA
================================= -->
<section class="booking-area padding-top-100px padding-bottom-70px">

    <div class="container">
       <div class="row">
   


       @foreach($orders as $order)
                          @foreach($order->cart->items as $item) 

            <div class="col-lg-4" style="margin:auto">
                <div class="form-box booking-detail-form">
                    <div class="form-title-wrap">
                        <h3 class="title">Ticket Details</h3>
                    </div><!-- end form-title-wrap -->

                    <div class="form-content">
                        <div class="card-item shadow-none radius-none mb-0">
                          <!--  <div class="card-img pb-4">
                                <a href="flight-single.html" class="d-block">
                                    <img src="{{asset('assets/images/traincheckout.jpg')}}" style="height:150px" alt="plane-img">
                                </a>
                            </div> -->
                 
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3 class="card-title">{{$item ['item'] ['origin']  }} <i class="la la-arrow-right mx-2"></i> {{$item ['item'] ['destination']  }}</h3>
                                        <p class="card-meta">Date:{{$item ['item'] ['travel_date']  }}</p>
                                    </div>
                                    
                                </div>
                                <div class="card-rating">
                                    <span class="badge text-white"><b>Seat Type:{{$item ['item'] ['ticket_class']  }}</b></span>
                                    
                                    <span class="rating__text"></span>
                                </div>
                                <div class="section-block"></div>
                                <ul class="list-items list-items-2 list-items-flush py-2">
                                    <li class="font-size-15"><span class="w-auto d-block mb-n1"><i class="la la-train mr-1 font-size-17"></i>Take off</span>{{$item ['item'] ['depature_time']  }}</li>
                                    <li class="font-size-15"><i class="la la-clock-o mr-1 text-black font-size-17"></i>{{$item ['item'] ['travel_time']  }}</li>
                                    <li class="font-size-15"><span class="w-auto d-block mb-n1"><i class="la la-train mr-1 font-size-17"></i>Arrival</span>{{$item ['item'] ['arrival_time']  }}</li>

                                    <li class="font-size-15"><span class="w-auto d-block mb-n1"><i class="la la-money-bill mr-1 font-size-17"></i>Ticket Cost</span>${{$item ['item'] ['ticket_price']  }}</li>

                                    <li class="font-size-15"><span class="w-auto d-block mb-n1"><i class="la la-file mr-1 font-size-17"></i>Ticket ID</span>{{$order->ticket_number}}</li>
                                    <li class="font-size-15"><span class="w-auto d-block mb-n1"><i class="la la-user mr-1 font-size-17"></i>Passenger</span>{{$order->name}}</li>
                                </ul>
                               <!-- <h3 class="card-title pb-3">Ticket Details</h3>
                                <div class="section-block"></div>
                                <ul class="list-items list-items-2 py-3">
                                    <li><span>Train Company:</span></li>
                                    <li><span>Train Number:</span></li>
                                    <li><span>Travel Date:</span></li>
                                    <li><span>Fare:</span>$</li>
                                    <li><span>Passengers:</span>1</li>
                                </ul>
                                <div class="section-block"></div> -->
                                
                            </div>
                          
                        </div><!-- end card-item -->

                    </div><!-- end form-content -->
                    
           


                </div><!-- end form-box -->
            </div><!-- end col-lg-4 -->

            @endforeach
                        @endforeach
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end booking-area -->

@endsection
