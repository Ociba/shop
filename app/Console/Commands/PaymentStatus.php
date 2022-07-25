<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Log;
use App\User;

class PaymentStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'payment:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
         //get all the transaction ids where status is innitiated 
         $all_initiated_payments = DB::table('users')->where('status','pending')->get();
         foreach($all_initiated_payments as $payments){
             $this->checkPaymentStatus($payments->transaction_id);
         }
         $this->info('Successfully updated status to successfull.');
    }
    /**
     * This function checks the transaction status money to a user account
     */
    public function checkPaymentStatus($transaction_id){
        $password = md5(env('APIPASSWORD').$transaction_id);
        $data = array(
            'transactionId' => $transaction_id
        );
        $post_data = json_encode($data);
        // Prepare new cURL resource
        $crl = curl_init('http://157.230.57.152:8008/payments/api/mobilemoney/get_transaction_status');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLINFO_HEADER_OUT, true);
        curl_setopt($crl, CURLOPT_POST, true);
        curl_setopt($crl, CURLOPT_POSTFIELDS, $post_data);
        // Set HTTP Header for POST request 
        curl_setopt($crl, CURLOPT_HTTPHEADER, array(
            'username:jaajacollections',
            'password:'.$password,
            'Content-Type: application/json',
            // 'Content-Length: ' . strlen($payload))
        ));
        // Submit the POST request
        $result = curl_exec($crl);
        Log::info($result);
        if ($result === false) {
            // throw new Exception('Curl error: ' . curl_error($crl));
            //print_r('Curl error: ' . curl_error($crl));
            $result_noti = 0; die();
        } else {
            if(json_decode($result,true)["message"] == "pending"){
                if(json_decode($result,true)["message"] == "successful"){
                    $status = 'successful';
                    return $this->updatePaymentStatus($status, $transaction_id);
                }else{
                    $status = 'failed';
                    return $this->updatePaymentStatus($status, $transaction_id);
                }
            }
            $result_noti = 1; die();
        }
        // Close cURL session handle
        curl_close($crl);
    }

    /**
     * This function updates the transaction status
     */
    private function updatePaymentStatus($status, $transaction_id){
        User::where('id',$transaction_id)->update(array(
            'status' => $status
        ));
    }
}
