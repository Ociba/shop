<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    protected function getDashboard()
    {
        if (auth()->user()->user_type == '1') {
            return view('dashboard');
        } elseif (auth()->user()->user_type == '3') {
            return redirect('/my-order');
        } else {
            if (auth()->user()->user_type == '4' && (auth()->user()->payment_status == 'successful')) {
                return redirect('/produce-dashboard');
            } elseif (auth()->user()->user_type == '4' && (auth()->user()->payment_status == 'pending')) {
                return redirect('/pay-your-subscription');
            } else {
                if (auth()->user()->user_type == '2' && (auth()->user()->payment_status == 'successful')) {
                    return redirect('/accomodation-dashboard');
                } elseif (auth()->user()->user_type == '2' && (auth()->user()->payment_status == 'pending')) {
                    return redirect('/pay-subscription');
                } else {
                    return redirect('/pay-subscription');
                }
            }
        }
    }

    protected function getFrontOrder()
    {
        return view('send_order');
    }

    protected function getAccomodationDashboard()
    {
        return view('accomodation_dashboard');
    }

    protected function getProduceDashboard()
    {
        return view('produce_dashboard');
    }

    public function getPaymentForm()
    {
        return view('payment_form');
    }

    public function getAccomodationPaymentForm()
    {
        return view('accomodation_payment_form');
    }

    public function getPaymentsInfo()
    {
        return view('payment_info');
    }

    public function getMyAccomodationPaymentsInfo()
    {
        return view('my_accomodation_payments');
    }

    public function getChangePassword()
    {
        return view('change_my_password');
    }

    /**
     * This function changes pwd for the accomodation clients
     */
    public function changePassword()
    {
        return view('change_password');
    }
}
