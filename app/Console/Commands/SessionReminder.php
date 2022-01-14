<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Session;
use Carbon\carbon;

class SessionReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'session:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notify users for their upcomming sessions.';

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
     * @return int
     */
    public function handle()
    {
        $sessions = Session::all();
        foreach($sessions as $session){
            $start_date_time = date_create_from_format('Y-m-d H:i:s', $session->start_date_time);

            $difference = Carbon::now()->diff($start_date_time);
            dd($difference);
            
        }
        \Log::info("Session reminder is working fine!");
    }
}
