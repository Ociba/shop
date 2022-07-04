<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected function getDashboard(){
        if(auth()->user()->user_type == 1){
            return view('dashboard');
        }elseif(auth()->user()->user_type == 2 || (auth()->user()->user_type == 4)){
            return redirect('/payments/pay-your-subscription');
        }else{
            return redirect('/my-order');
        }
    }
    protected function getFrontOrder(){
        return view('send_order');
    }
}  
