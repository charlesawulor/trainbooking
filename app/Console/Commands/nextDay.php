<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\Mail;

use Illuminate\Console\Command;
use App\Order;
use Carbon\Carbon;

class nextDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Travel date reminder';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        order::where('travel_date','<', Carbon::now());
        $user = order::all();
        foreach ($user as $all)
        {
         Mail::raw("Hello,good day. This is a reminder email for your scheduled trip with ticketbooking train service. Have a wonderful day ahead. Thank you .", function($message) use ($all)
        {
          $message->from('customercare@ticketbooking.com');
          $message->to($all->email)->subject('Daily Reminder');
           });
           }
         $this->info('Daily message sent');
    }
}
