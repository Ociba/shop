<?php

namespace App\Http\Controllers;

use Auth;

class LogoutController extends Controller
{
    //This function redirects logged in user front page
    protected function logoutUser()
    {
        Auth::logout();

        return redirect('/');
    }
}
