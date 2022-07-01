<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected function getDashboard(){
        if(auth()->user()->user_type == 1){
            return view('dashboard');
        }else{
            return redirect('/cart/my-order');
        }
    }
    protected function getFrontOrder(){
        return view('send_order');
    }
}
