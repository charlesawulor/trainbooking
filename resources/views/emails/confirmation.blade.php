

<!DOCTYPE html>
<html>

<head>
<title>
</title>
              <div class="col-lg-12">
                    <div class="menu-wrapper">
                        <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                        <div class="logo">
                        <a href="index.html"><img src="{{asset('assets/images/ticketing.png')}}" alt="logo"></a>
                           
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div><!-- end menu-toggler -->
                        </div><!-- end logo -->
                       
                     <!--   <div class="nav-btn">
                            <a href="{{route('booking-cart')}}" class="theme-btn">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}} Unpaid Tickets</a>
                        </div>-->
                    </div>
                </div><!-- end col-lg-12 -->
</head>

<body>
    <h3>Your train ticket booking was successful. Check your ticket page to get your booking information. Please ensure to come to the train terminal with your ticket. </h3>
    
    <p><h6 style="color:#287dfa">
    Regards,<br>
    Train Booking Team.
 
    </h6>
    </p>
      
   
</body>


</html>