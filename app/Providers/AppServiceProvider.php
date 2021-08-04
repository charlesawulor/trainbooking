<?php

namespace App\Providers;

use App\Station;
use App\Train;
use App\Order;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::share('stations', Station::orderBy('id','asc')->get());
       // View::share('Trains', Train::orderBy('id','desc')->get()); 

        View::share('trains', Train::orderBy('id','desc')->take(3)->get()); 
        View::share('popularroutes', Train::orderBy('id','desc')->take(3)->get()); 

        View::share('searchtrip', Train::orderBy('id','desc')->take(3)->get()); 
        View::share('searchseat', Order::orderBy('id','desc')->get()); 

        View::share('alltrains', Train::orderBy('id','desc')->get());


    
    


    }
}
