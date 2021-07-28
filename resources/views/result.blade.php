@if(count($searchtrip) > 0)	
                @foreach($searchtrip as $trip)

<p>  {{$trip->travel_time}}</p>

                @endforeach
                @endif