<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Train;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Auth;
use Stripe\Charge;
use Stripe\Stripe;
use App\Order;
use App\Mail\Confirmation;


class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$stations = Station::orderBy('id','desc')->get();
       return view('home',compact ('stations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trains = Train::find($id);
        return view('singlepage')->with('trains',$trains);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search()
    {
    $search_text = $_GET['query'];
    $search_text1 = $_GET['query1'];
    $search_text2 = $_GET['datee'];
    $searchtrip = Train::where('origin',  'LIKE', '%' . $search_text. '%')->Where('destination',  'LIKE', '%' . $search_text1. '%')->Where('travel_date',  'LIKE', '%' . $search_text2. '%')->get();
    //This seat search counter below  is when all travel route are combined on one train for the choosen date
     $searchseat = Order::where('travel_date',  'LIKE', '%' . $search_text2. '%')->get();
    return view('result',compact ('searchtrip','searchseat'));
    }



    public function getAddToCart(Request $request, $id) {
        $train = Train::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($train, $train->id);   
        $request->session()->put('cart',$cart);
       // return back(); 
       return redirect()->route('booking-cart');        
    }




    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);        
     if (count($cart->items) > 0){
    Session::put('cart', $cart);
     }else {
      Session::forget('cart');
     }
       // return back(); 
        return redirect()->route('booking-cart');
    }



     public function getCart(){
        if (!Session::has('cart')){
             return view('booking-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('booking-cart', ['trains' => $cart->items, 'totalPrice' => $cart->totalPrice]);
      }



      public function getCheckout(){
        if (!Session::has('cart')){
            return view('booking-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('checkout', ['trains' => $cart->items, 'totalPrice' => $cart->totalPrice]);
      }



      public function postCheckout(Request $request)
      {
          if (!Session::has('cart')){
             return redirect()->route('ticket')->with('success', 'Payment successful');
         }
         $oldCart = Session::get('cart');
         $cart = new Cart($oldCart);
         
        Stripe::setApiKey('sk_test_51Io4hXACLwpJgLfCVSFzJMfIoYRSfnzavlSQIMDzzaTnwziz6vtwrCyGutVROodumwZabXSPvFDC9Q6GKyf8Mz3w002rLASPxn');
         try {
           $charge = Charge::create(array(
              "amount" => $cart->totalPrice * 100,
              "currency" => "usd",
              "source" =>'tok_visa', //use this for test cards
           // "source" => $request->input('stripeToken'), // use this for real cards when In production
              "description" => "Charge for property inspection appointment booking"
              ));
              $order = new Order();
              $order->cart = serialize($cart);
              $order->name = $request->input('name');
              $order->email = $request->input('email');
              $order->phone = $request->input('phone');
              $order->ticket_number = $request->input('ticket');
              $order->origin = $request->input('origin');
              $order->destination = $request->input('destination');
              $order->travel_date = $request->input('travel_date');
              $order->payment_id = $charge->id;
              Auth::user()->orders()->save($order);             
             } catch (\Exception $e){
               return redirect()->route('checkout')->with('error',$e->getMessage());
            }
            \Mail::to($order->email)->send(new Confirmation);
            Session::forget('cart');
            return redirect()->route('successful')->with('success', 'Payment successful');
          } 
         
         



   public function successful()
    {
       
        return view('successful')->with('success', 'Payment successful');
    }







}
