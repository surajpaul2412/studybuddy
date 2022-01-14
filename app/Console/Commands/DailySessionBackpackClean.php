<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Session;
use App\Models\BackpackItem;
use Carbon\carbon;
use Storage;
use File;
use DB;

class DailySessionBackpackClean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clean:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Respectively checks expired backpack items and clean.';

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
        $sessions = Session::where('backpack_id','!=','null')->get();
        foreach($sessions as $key => $session){
            if($session->backpack->created_at->addDays(2) < Carbon::now()){
                // cleaning backpack items from storage
                foreach ($session->backpack->backpackItems as $key => $item) {
                    if($item->file_url){
                        Storage::disk('public')->delete($item->file_url);
                        $item = BackpackItem::findOrFail($item->id)->delete();
                    }
                }
                // clean session backpack
                $session->backpack->delete();
                // Update Session Backpack
                $session->update(['backpack_id'=> null]);
            }
        }
        \Log::info("Backpack cleaner is working fine!");
    }
}
