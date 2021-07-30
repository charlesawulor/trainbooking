@extends('layouts.app')

@section('content')


       

        <!-- main content area -->

        <!-- section search result -->
        <div class="bst-srcrslt">
            <div class="container-fluid">
                <div class="ctrl-wraper2">

                    <div class="cmn-header">
                        <h1>Your best <br />search result</h1>
                        <div class="hdr-rght">
                            <span>changed your mind?</span>
                            <a class="btn-src-agn" href="#">search again</a>
                        </div>
                    </div>

                   

                        

                 

             

                </div>
            </div>
        </div>

        <!-- We found -->
        <div class="wefound">
            <div class="container-fluid">
                <div class="ctrl-wraper2">
                  <!--  <header>
                        <h3>Hey, We found</h3>
                        <span>Some best price for you</span>
                    </header> -->



            


                    <div class="flights-dtls-listing">
                   
                        <!-- new row -->
                        <div class="return-flight-src-list">
                           
                        @if(count($searchtrip) > 0)	
                @foreach($searchtrip as $trip)
                            <div class="listrow2">
                                <div class="col1">
                                    <div class="rlistrows">
                                        <div class="source-destination">
                                            <div class="journeydate">
                                                <span>Travel date</span>
                                                <strong> {{$trip->travel_date}} <i class="gt-right-arrow"></i> </strong>
                                            </div>
                                            <figure class="cmpny-logo">
                                                <img class="bdr-circle" src="images/airline-logo5.jpg" alt="img">
                                                <figcaption><b>{{$trip->rail_company}}</b></figcaption>
                                            </figure>
                                            <div class="src-dst">
                                                <div class="src">
                                                    <strong>{{$trip->origin}}</strong>
                                                    <span> <i class="gt-right-arrow"></i>{{$trip->depature_time}}</span>
                                                </div>

                                                <div class="tracking-line">
                                                    <img src="images/train-line.png" alt="img" />
                                                </div>

                                                <div class="src">
                                                    <strong>{{$trip->destination}}</strong>
                                                    <span> <i class="gt-right-arrow"></i>{{$trip->arrival_time}}</span>
                                                </div>

                                            </div>
                                        </div>
                            
                                        <div class="aditional-features">
                                            <ul>
                                                <li>
                                                    <div class="custom-control custom-checkbox">
                                                    <i class="gt-right-arrow"></i>
                                                    <input type="checkbox" class="custom-control-input" id="rating13" checked>
                                                    <label class="custom-control-label" for="rating13">
                                                        No food included  
                                                    </label>
        
                                                    </div>
                                                </li>

                                                

                                              <li>
                                                    <div class="custom-control custom-checkbox">
                                                    <i class="gt-right-arrow"></i>
                                                    <input type="checkbox" class="custom-control-input" id="rating13" checked>
                                                    <label class="custom-control-label" for="rating13">
                                                    {{$trip->travel_time}} Trip  
                                                    </label>
        
                                                    </div>
                                                </li>

                                            
                                            </ul>
                                        </div>
                                    </div>

                              
                                </div>
                                    
                                <div class="col3">
                                    <div class="fare-book">
                                        <div class="fare">
                                            <strong>${{$trip->price}}</strong>
                                          
                                            <span class="tag-refund bdr-rds50"><b>Non refundable</b></span>

                                            <div class="extra-facility">
                                                <span class="tag-deals-avbl bdr-rds5"><b>Train Number: {{$trip->train_number}}</b></span>
                                                <span class="tag-emi-avbl bdr-rds5"><b>Ticket Class: {{$trip->ticket_class}}</b></span>
                                            </div>
                                        </div>
                                       
                                        <a href="flight-seatbooking.html" class="booking">
                                            <!-- <button class="submit"><span>Book now</span></button> -->
                                            <button type="submit" class="submit"><span>Book now</span></button>
        
                                            <!-- Inspired by this dribbble post by Colin Garvin https://dribbble.com/shots/1426764-Submit-Button -->
                                        </a>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                            @else
                            <header>
                        <h3>Your searched route or travel date didn't return any result.</h3>
                       
                    </header>



                @endif



                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection