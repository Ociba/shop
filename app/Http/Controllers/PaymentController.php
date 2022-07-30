<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function makeDeposit(){
        $transaction_id = rand(1000,1000000);
        $password = md5(env('APIPASSWORD').$transaction_id);
        // $package_price = 1000;
        $data = array(
            'transactionId' => $transaction_id,
            'amount'        => request()->amount,
            'narration'     => 'Test',
            'phoneNumber'   => request()->phone_number
        );
        $post_data = json_encode($data);
        // Prepare new cURL resource
        $crl = curl_init('http://157.230.57.152:8008/payments/api/mobilemoney/debit_customer');
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
        $now = Carbon::now();
        $days_from_now = $now->addYear(1);
        User::where('id',auth()->user()->id)->update(array(
          'amount'        =>request()->amount,
          'payment_date' =>$days_from_now,
        ));
        return redirect()->back()->with('msg','Operation successful,Wait pop up to Confirm Payment');
        // handle curl error
        if ($result === false) {
            // throw new Exception('Curl error: ' . curl_error($crl));
            //print_r('Curl error: ' . curl_error($crl));
            $result_noti = 0; die();
        } else {
            //\Log::info("wait");
          
            $result_noti = 1; die();
        }
        // Close cURL session handle
        curl_close($crl);
    }

     /**
     * This function updates the payments status and id in the users table once a paymennt is successful
     */
    private function updatePaymentStatus($user_id){
        User::where('id',$user_id)->update(array(
            'payment_status'  => request()->payment_status
        ));
    }
}
