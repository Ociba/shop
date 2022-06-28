<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected function getDashboard(){
        if(auth()->user()->user_type == 3){
            return view('send_order');
        }else{
            return redirect('/dashboard');
        }
    }
    protected function getFrontOrder(){
        return view('send_order');
    }
}
