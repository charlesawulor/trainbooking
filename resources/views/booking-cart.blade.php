@extends('layouts.app')

@section('content')


<!-- ================================
    START BREADCRUMB AREA
================================= -->

<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START CARD AREA
================================= -->

@if(Session::has('cart'))
<section class="card-area section--padding padding-right-100px padding-left-100px">
    <div class="container-fluid">
       
       <div class="row">
           <div class="col-lg-12 responsive-column">
               <div class="card-item ">
                   <div class="card-img">
                       <a href="tour-details.html" class="d-block">
                           <img src="{{asset('assets/images/nigeriatrain.jpg')}}" style="height:200px" alt="Destination-img">
                       </a>
                      
                   </div>

                   @foreach($trains as $train)
                   <div class="card-body">
                       <h3 class="card-title"><a href="tour-details.html">{{$train['item']['origin']}}  <i class="la la-arrow-right mx-2"></i> {{$train['item']['destination']}}</a></h3>
                       <p class="card-meta">Depart: {{$train['item']['depature_time']}}<i class="la la-exchange mx-2"></i>Arrive: {{$train['item']['arrival_time']}}</p>
                       <p class="card-meta">Travel Date: {{$train['item']['travel_date']}}</p>
                       <div class="card-rating">
                           <span class="badge text-white"><b>Ticket type : {{$train['item']['ticket_class']}}</b></span>
                           <span class="review__text"><b>Train Number : {{$train['item']['train_number']}}</b></span>
                           <span class="rating__text"></span>
                       </div>
                       <div class="card-price d-flex align-items-center justify-content-between">
                           <p>
                               <span class="price__from"></span>
                               <span class="price__num">${{$train['price']}}</span>
                           </p>
                           <span class="tour-hour"><i class="la la-clock-o mr-1"></i>Trip Duration : {{$train['item']['travel_time']}}</span>
                       </div>
                   </div>

                   @endforeach


               </div><!-- end card-item -->
           </div><!-- end col-lg-4 -->

           <div class="row">
           <div class="col-lg-12 responsive-column">
           <div class="card-body">
           <p><b>Grand Total : ${{$totalPrice}}</b></p>
           </div>

           </div>
           </div>


      </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box mt-3 text-center">
                    <a href="{{route('checkout')}}" class="theme-btn"><i class="la la-money-bill mr-1"></i>Make Payment</a>
                    
                </div><!-- end btn-box -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container-fluid -->
</section><!-- end card-area -->

@endif


@endsection