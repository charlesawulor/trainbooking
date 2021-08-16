@extends('layouts.app')

@section('content')


<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-6">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">Train Booking</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                        
                            <li>Train Booking</li>
                        </ul>
                    </div><!-- end breadcrumb-list -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START BOOKING AREA
================================= -->
<section class="booking-area padding-top-100px padding-bottom-70px">

<div id="charge-error" style="background-color:white;border-color:white" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''}}" > {{ Session::get('error')}} </div>
    <div class="container">
    
       <div class="row">
       
       @foreach($trains as $train) 
            <div class="col-lg-8">
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title">Your Personal Information</h3>
                    </div><!-- form-title-wrap -->

                    <div class="form-content">
                        <div class="contact-form-action">
                            <form method="post" action="{{route('checkout')}}" id="checkout-form">
                                <div class="row">
                                    <div class="col-lg-12 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Full Name</label>
                                            <div class="form-group">
                                                <span class="la la-user form-icon"></span>
                                                <input class="form-control" type="text" name="name" placeholder="Full name">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                             
                                    <div class="col-lg-12 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Your Email</label>
                                            <div class="form-group">
                                                <span class="la la-envelope-o form-icon"></span>
                                                <input class="form-control" type="email" name="email" placeholder="Email address">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-12 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Phone Number</label>
                                            <div class="form-group">
                                                <span class="la la-phone form-icon"></span>
                                                <input class="form-control" type="text" name="phone" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Ticket No</label>
                                            <div class="form-group">
                                                <span class="la la-map-marked form-icon"></span>
                                                <input class="form-control" type="text" value="NRC<?php 
                                                                       $rand=rand(); 
                                                                       echo $rand; 
                                                        ?>NG" 
                                                        name="ticket" readonly >
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->

                                    <div class="col-lg-12 responsive-column">
                                        <div class="input-box">
                                      <!--  <label class="label-text">Origin</label> -->
                                            <div class="form-group">
                                                <span class=""></span>
                                                <input class="form-control" type="text" value="{{$train['item']['origin']}}" name="origin" placeholder="Phone Number" hidden>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 responsive-column">
                                        <div class="input-box">
                                           <!-- <label class="label-text">Destination</label> -->
                                            <div class="form-group">
                                                <span class=""></span>
                                                <input class="form-control" type="text" value="{{$train['item']['destination']}}" name="destination" placeholder="Phone Number" hidden>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->

                                    <div class="col-lg-12 responsive-column">
                                        <div class="input-box">
                                         <!--   <label class="label-text">Travel Date</label> -->
                                            <div class="form-group">
                                                <span class=""></span>
                                                <input class="form-control" type="text" value="{{$train['item']['travel_date']}}" name="travel_date" placeholder="Phone Number" hidden >
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->

                               
                               
                                  


                                    <div class="col-lg-12 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Card Holder Name</label>
                                                    <div class="form-group">
                                                        <span class="la la-credit-card form-icon"></span>
                                                        <input class="form-control" id="card-name" type="text"  placeholder="Card holder name">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->

                                            <div class="col-lg-12 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Card Number</label>
                                                    <div class="form-group">
                                                        <span class="la la-credit-card form-icon"></span>
                                                        <input class="form-control" id="card-number" type="text"  placeholder="Card number">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->

                                            <div class="col-lg-6 responsive-column">
                                                        <div class="input-box">
                                                            <label class="label-text">Expiry Month</label>
                                                            <div class="form-group">
                                                                <span class="la la-credit-card form-icon"></span>
                                                                <input class="form-control"  id="card-expiry-month" type="text"  placeholder="MM">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 responsive-column">
                                                        <div class="input-box">
                                                            <label class="label-text">Expiry Year</label>
                                                            <div class="form-group">
                                                                <span class="la la-credit-card form-icon"></span>
                                                                <input class="form-control" id="card-expiry-Year" type="text" placeholder="YY">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">CVV</label>
                                                    <div class="form-group">
                                                        <span class="la la-pencil form-icon"></span>
                                                        <input class="form-control" id="card-cvc" type="text"  placeholder="CVV">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->

                                            {{csrf_field()}}  
                                            <div class="col-lg-12">
                                                <div class="btn-box">
                                                    <button class="theme-btn" type="submit">Confirm Booking - Pay ${{$totalPrice}}</button>
                                                </div>
                                            </div><!-- end col-lg-12 -->



                                </div>
                           
                        </div><!-- end contact-form-action -->
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
             
            </div><!-- end col-lg-8 -->
@endforeach
         



            <div class="col-lg-4">
                <div class="form-box booking-detail-form">
                    <div class="form-title-wrap">
                        <h3 class="title">Booking Details</h3>
                    </div><!-- end form-title-wrap -->
                    <div class="form-content">
                        <div class="card-item shadow-none radius-none mb-0">
                            <div class="card-img pb-4">
                                <a href="flight-single.html" class="d-block">
                                    <img src="{{asset('assets/images/traincheckout.jpg')}}" style="height:150px" alt="plane-img">
                                </a>
                            </div>
                            @foreach($trains as $train) 
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3 class="card-title">{{$train['item']['origin']}} <i class="la la-arrow-right mx-2"></i> {{$train['item']['destination']}}</h3>
                                        <p class="card-meta">One way trip</p>
                                    </div>
                                    
                                </div>
                                <div class="card-rating">
                                    <span class="badge text-white"><b>Seat Type:{{$train['item']['ticket_class']}}</b></span>
                                    
                                    <span class="rating__text"></span>
                                </div>
                                <div class="section-block"></div>
                                <ul class="list-items list-items-2 list-items-flush py-2">
                                    <li class="font-size-15"><span class="w-auto d-block mb-n1"><i class="la la-train mr-1 font-size-17"></i>Take off</span>{{$train['item']['depature_time']}}</li>
                                    <li class="font-size-15"><i class="la la-clock-o mr-1 text-black font-size-17"></i>{{$train['item']['travel_time']}}</li>
                                    <li class="font-size-15"><span class="w-auto d-block mb-n1"><i class="la la-train mr-1 font-size-17"></i>Arrival</span>{{$train['item']['arrival_time']}}</li>
                                </ul>
                                <h3 class="card-title pb-3">Ticket Details</h3>
                                <div class="section-block"></div>
                                <ul class="list-items list-items-2 py-3">
                                    <li><span>Train Company:</span>{{$train['item']['rail_company']}}</li>
                                    <li><span>Train Number:</span>{{$train['item']['train_number']}}</li>
                                    <li><span>Travel Date:</span>{{$train['item']['travel_date']}}</li>
                                    <li><span>Fare:</span>${{$totalPrice}}</li>
                                    <li><span>Passengers:</span>1</li>
                                </ul>
                                <div class="section-block"></div>
                                <ul class="list-items list-items-2 pt-3">
                                    <li><span>Sub Total:</span>${{$totalPrice}}</li>
                                   <!-- <li><span>Taxes And Fees:</span>$5</li> -->
                                    <li><span>Total Price:</span>${{$totalPrice}}</li>
                                </ul>
                            </div>
                            @endforeach
                        </div><!-- end card-item -->
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end booking-area -->

@endsection

@section('scripts')

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="{{ URL::to('src/js/checkout.js')}}"></script>

@endsection