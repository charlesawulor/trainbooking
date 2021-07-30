<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Train;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;



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
    $search_text2 = $_GET['daterange-single'];
    $searchtrip = Train::where('origin',  'LIKE', '%' . $search_text. '%')->Where('destination',  'LIKE', '%' . $search_text1. '%')->Where('travel_date',  'LIKE', '%' . $search_text2. '%')->get();
    return view('result',compact ('searchtrip'));
    }


    

   



}
