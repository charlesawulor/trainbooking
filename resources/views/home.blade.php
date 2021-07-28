@extends('layouts.app')

@section('content')



  <!-- banner -->
  <div class="fixedbanner-area clearfix">
    <div class="container-fluid">

      <div class="ctrl-wraper2">
        <div class="bannertext">
          <h1 class="rellax" data-rellax-speed="3" data-rellax-percentage="0.3">
            <strong>Book Trip</strong>
            <strong>Lets<span>go!</span></strong>
            <!-- <span class="banner-innertext rellax" data-rellax-speed="1" 
            data-rellax-percentage="0.35" data-title="lets go"></span> -->
          </h1>

          <span class="rellax" data-rellax-speed="2" data-rellax-percentage="0.1">The one and only stop for every
            traveler</span>
        </div>

        <div class="parallax-dots">
          <ul>
          <li>
              <a data-scroll href="#hotelbooking">About Us</a></li>
            <li>
              <a data-scroll href="#flightbooking">Train Booking</a></li>
            <li><a data-scroll href="#trainbooking">Travel Guide</a></li>
            <li>
              <a data-scroll href="#hotelbooking">News</a></li>
            <!--  <li>
              <a data-scroll href="#cuisinebooking">resturant booking</a></li>
            <li>
              <a data-scroll href="#cruisebooking">cruise booking</a></li>
            <li>
              <a data-scroll href="#cabbooking">cab booking</a></li> -->
            
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="bookingsec sec-trainbooking" id="trainbooking">
    <div class="container-fluid">
      <div class="ctrl-wraper2">
        <span class="animated-gt-train section-icon rellax" data-rellax-speed="2" data-rellax-percentage="0.1"></span>

        <img class="secmain-img rellax" data-rellax-speed="3" data-rellax-percentage=".9" src="images/train-LGT.gif"
          alt="train" />
        <!-- <span class="animatiomn-train"><img src="./images/train-anim/" /></span> -->

        <div class="ctrl-inner-wraper">
          <div class="cntbox">
            <h1 class="sec-heading ">train ticket <br /> booking</h1>
            <span class="sec-subheading ">Experience the most hassle free train booking <br />and get great deals with
              reasonable rates</span>

            <div class="deals-row">
              <div class="leftbox">
                <h2 class="">Great deals <br /> and great offers</h2>
           

              </div>

              <div class="partners">
                <span data-os-animation="zoomIn"><img src="images/partners1.png" alt="partners" /></span>
                <span data-os-animation="zoomIn"><img src="images/partners2.png" alt="partners" /></span>
              </div>

            </div>

          </div>


          <div class="formbox" style="margin-top:100px">
            <div class="pnl-header" data-os-animation="fadeInUp" data-os-animation-delay="1s" style="margin-top:80px">
              <ul class="trip-switch " >
            <p style="color:white; margin-right:30%"> Book Trip </p>
              </ul>
              <p> instant train booking system <br />nationwide </p>
            </div>

        <div class="pnl-body" >
          <form action="{{route('result')}}" method="GET">
                <div class="form-field icon-location srcby-counter ">
                  <label>form</label>
                  <select class="inputype1" name="query">
                  @if(count($stations) > 0)	
	                                @foreach($stations as $station)  
                    <option value="{{$station->train_station}}" >{{$station->train_station}}</option>
                    @endforeach
                    @endif


                    
                  </select>
                </div>

                <div class="form-field icon-location srcby-counter ">
                  <label>to</label>
                  <select class="inputype1" name="query1"  >
                  @if(count($stations) > 0)	
	                                @foreach($stations as $station)  
                    <option value="{{$station->train_station}}" >{{$station->train_station}}</option>
                    @endforeach
                    @endif
                  </select>
                </div>

                <div data-date-picker data-date-picker-type="single"
                  class="form-field icon-calendar bx--date-picker bx--date-picker--single ">
                  <svg data-date-picker-icon class="bx--date-picker__icon"></svg>
                  <label>departure</label>
                  <input type="date" id="date-picker-6"  class="inputype1 bx--date-picker__input"
                    pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy" min="<?php echo date("Y-m-d"); ?>" data-date-picker-input />
                </div>

          

                <div class="btn-group">
                 
                  <button class="btn btn-trpsrc" data-os-animation="fadeInRight" href="">search my train</button>
                </div>
              </form>

            </div>

            <span class="gt-shape" data-os-animation="zoomIn"></span>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="bookingsec sec-hotelbooking" id="hotelbooking">
    <div class="container-fluid">
      <div class="ctrl-wraper2">
        <span class="animated-gt-door-sign section-icon rellax" data-rellax-speed="2"
          data-rellax-percentage="0.1"></span>

        <img class="secmain-img rellax" data-rellax-speed="2" data-rellax-percentage="0.6" src="images/home-hotel.png"
          alt="hotel" />


      </div>


    </div>
  </div>

  @endsection