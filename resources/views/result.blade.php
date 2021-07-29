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

                   

                        

                 

                    <div class="dtls-bar">
                        <div class="dtl-header">
                            <h3>Your <br /> details</h3>
                            <p>you can change your details
                                <br /> at any time</p>
                        </div>
                        <ul>
                            <li>
                                <!-- <div class="calendar-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><defs></defs><title>Calendar-Alt</title>
                                        <path id="bottom-left" class="a" d="M7.62,16H6.34A1.21,1.21,0,0,0,5,17v1a1.21,1.21,0,0,0,1.34,1H7.73A1.1,1.1,0,0,0,9,18.05L9,17A1.21,1.21,0,0,0,7.62,16Z"/>
                                        <path id="top-middle" class="a" d="M11,14h2a0.9,0.9,0,0,0,1-.88V12a1,1,0,0,0-1-1H11a1,1,0,0,0-1,1v1.12A0.9,0.9,0,0,0,11,14Z"/>
                                        <rect id="top-left" class="a" x="5" y="11" width="4" height="3" rx="1" ry="1"/>
                                        <rect id="top-right" class="a" x="15" y="11" width="4" height="3" rx="1" ry="1"/>
                                        <path id="bottom-middle" class="a" d="M12.66,16H11.38A1.21,1.21,0,0,0,10,17l0.07,1a1.21,1.21,0,0,0,1.34,1h1.28A1.1,1.1,0,0,0,14,18.05V17A1.21,1.21,0,0,0,12.66,16Z"/>
                                        <path class="container" d="M21.5,3H17V1.06a1,1,0,0,0-1-1H15a1,1,0,0,0-1,1V3H10V1A1,1,0,0,0,9,0H8A1,1,0,0,0,7,1V3H2.5A2.5,2.5,0,0,0,0,5.5v16A2.5,2.5,0,0,0,2.5,24h19A2.5,2.5,0,0,0,24,21.5V5.5A2.5,2.5,0,0,0,21.5,3ZM21,21.13H3V5.94H7v1a1,1,0,0,0,1,1H9a1,1,0,0,0,1-1v-1h4V7a1,1,0,0,0,1,1h1a1,1,0,0,0,1-1V5.94h4V21.13Z"/>
                                    <rect id="bottom-right" class="a" x="15.05" y="16" width="3.95" height="3" rx="1" ry="1"/></svg>
                                </div> -->

                                <i class="gt-calendar"></i>
                                <p>10 may, 2017</li>
                            <li>
                                <!-- <i class="gt-user-1"></i> -->
                                <div class="person">
                                    <svg viewBox="0 0 68 66" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(2.000000, 2.000000)" fill-rule="nonzero">
                                                <g class="svg-body">
                                                    <path d="M61,63.5 L57,63.5 C57,48.3121694 44.6878306,36 29.5,36 C14.3121694,36 2,48.3121694 2,63.5 L-2,63.5 C-2,46.1030304 12.1030304,32 29.5,32 C46.8969696,32 61,46.1030304 61,63.5 Z" fill="#180839"></path>
                                                </g>
                                                <g class="svg-head">
                                                    <path d="M29,34 C19.0588745,34 11,25.9411255 11,16 C11,6.0588745 19.0588745,-2 29,-2 C38.9411255,-2 47,6.0588745 47,16 C47,25.9411255 38.9411255,34 29,34 Z M29,30 C36.7319865,30 43,23.7319865 43,16 C43,8.2680135 36.7319865,2 29,2 C21.2680135,2 15,8.2680135 15,16 C15,23.7319865 21.2680135,30 29,30 Z" fill="#180839"></path>
                                                    <g class="svg-eyes">
                                                        <line x1="23" y1="10" x2="23" y2="17" stroke-width="3" stroke="#180839"></line>
                                                        <line x1="33" y1="10" x2="33" y2="17" stroke-width="3" stroke="#180839"></line>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>

                                <p>2 adults + 1child</p>
                            </li>
                            <li>
                                <i class="gt-star"></i>
                                <p>Economy class</p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <!-- We found -->
        <div class="wefound">
            <div class="container-fluid">
                <div class="ctrl-wraper2">
                    <header>
                        <h3>Hey, We found</h3>
                        <span>Some best price for you</span>
                    </header>



            


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
                                                <span>Journey date</span>
                                                <strong> {{$trip->travel_date}} <i class="gt-right-arrow"></i> </strong>
                                            </div>
                                            <figure class="cmpny-logo">
                                                <img class="bdr-circle" src="images/airline-logo5.jpg" alt="img">
                                                <figcaption>{{$trip->rail_company}}</figcaption>
                                            </figure>
                                            <div class="src-dst">
                                                <div class="src">
                                                    <strong>{{$trip->origin}}</strong>
                                                    <span> <i class="gt-right-arrow"></i>{{$trip->depature_time}}</span>
                                                </div>

                                                <div class="tracking-line">
                                                    <img src="images/tracking-line.png" alt="img" />
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
                                                    <input type="checkbox" class="custom-control-input" id="rating14" checked>
                                                    <label class="custom-control-label" for="rating14">
                                                        Multi checking 
                                                    </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-checkbox">
                                                    <i class="gt-right-arrow"></i>
                                                    <input type="checkbox" class="custom-control-input" id="rating15" checked>
                                                    <label class="custom-control-label" for="rating15">
                                                        Trip Duration 
                                                    </label> 
                                                    <span class="hrs">{{$trip->travel_time}}</span> 
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                              
                                </div>
                                    
                                <div class="col3">
                                    <div class="fare-book">
                                        <div class="fare">
                                            <strong>$ {{$trip->price}}</strong>
                                            <span>Moderate price</span>
                                            <span class="tag-refund bdr-rds50">Non refundable</span>

                                            <div class="extra-facility">
                                                <span class="tag-deals-avbl bdr-rds5">2 Exciting deals available</span>
                                                <span class="tag-emi-avbl bdr-rds5">Ticket Class: {{$trip->ticket_class}}</span>
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