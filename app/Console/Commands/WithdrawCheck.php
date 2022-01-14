<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Withdraw;

class WithdrawCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'withdraw:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check Withdraw status';

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
        $withdraws = Withdraw::whereStatus(0)->get();
        foreach($withdraws as $withdraw){
            $withdrawStatus = withdrawStatus($withdraw);
        }
        \Log::info("Withdraw status check is working fine!");
    }
}
