<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Carbon\Carbon;

class PaymentPending extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'payment:pending';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command updates users payment status to pending after 180 days elapse';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $change_payment_status_to_pending = \DB::table('users')
            ->whereDate('payment_date', '<=',Carbon::now()->subdays(180))
            ->where('payment_status','successful')
            ->update(array(
                'payment_status' =>'pending',
            ));
        return $change_payment_status_to_pending;
    }
}
