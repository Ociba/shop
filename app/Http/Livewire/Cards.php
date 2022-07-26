<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CustomerOrder;
use App\Models\User;
use App\Models\Payment;
use App\Models\Partner;
use Carbon\Carbon;

class Cards extends Component
{
    public function render()
    {
        $todays_sales                            =$this->getTodaysSales();
        $this_months_sales                       =$this->getThisMonthsSales();
        $all_sales                               =$this->getAllSales();
        $todays_subscription_amount              =$this->getTodaySubscribers();
        $subscription_amount                     =$this->getTotalSubscriptionAmount();
        $total_number_of_subscribers             =$this->countTotalNumberOfSubscribers();
        $total_number_of_online_shopping_account =$this->countTotalNumberOfOnlineShopping();
        $total_number_of_partners                =$this->countTotalNumberOfPartners();
        return view('livewire.cards',compact('todays_sales','this_months_sales','all_sales','todays_subscription_amount',
                       'subscription_amount','total_number_of_subscribers','total_number_of_online_shopping_account','total_number_of_partners'));
    }
    /**
     * This function gets sum of todays sales
     */
    private function getTodaysSales(){
        return CustomerOrder::where('created_at',Carbon::today())->where('status','delivered')->sum('price');
    }
     /**
     * This function gets sum of this months  sales
     */
    private function getThisMonthsSales(){
        return CustomerOrder::whereMonth('created_at',Carbon::now()->month)->where('status','delivered')->sum('price');
    }
    /**
     * This function gets sum of all sales
     */
    private function getAllSales(){
        return CustomerOrder::where('status','delivered')->sum('price');
    }
     /**
     * This function gets sum of all subscribers today
     */
    private function getTodaySubscribers(){
        return User::where('payment_date',Carbon::today())->where('payment_status','successful')->sum('amount');
    }

    /**
     * This function gets sum of all subscribers amount
     */
    private function getTotalSubscriptionAmount(){
        return Payment::sum('amount');
    }

    /**
     * This function counts the number of subscribers
     */
    private function countTotalNumberOfSubscribers(){
        return User::where('user_type',2)->Orwhere('user_type',4)->where('payment_status','successful')->count();
    }
     /**
     * This function counts the number of online shopping account created
     */
    private function countTotalNumberOfOnlineShopping(){
        return User::where('user_type',3)->count();
    }
     /**
     * This function counts the number of partner who wants to join
     */
    private function countTotalNumberOfPartners(){
        return Partner::count();
    }
}
