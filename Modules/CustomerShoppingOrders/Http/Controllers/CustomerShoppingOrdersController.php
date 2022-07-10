<?php

namespace Modules\CustomerShoppingOrders\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\CustomerOrder;
use Carbon\Carbon;

class CustomerShoppingOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('customershoppingorders::index');
    }
     /**
      * This function gets order information
      */
      public function getOrderDetails($user_id){
        return view('customershoppingorders::customer_order_details',compact('user_id'));
      }
      /**
      * This function gets order information
      */
      public function getOrderPrintView($user_id){
        return view('customershoppingorders::view_customer_order_print',compact('user_id'));
      }
       /**
      * This function gets order information  now
      */
      public function getPrintOrderNow($user_id){
              $print_customer_order  =CustomerOrder::join('users','users.id','customer_orders.user_id')
              ->join('shops','shops.id','customer_orders.item_id')
              ->where('customer_orders.status','active')
              ->whereDate('customer_orders.created_at' , '=',Carbon::yesterday())
              ->whereTime('customer_orders.created_at' , '>',Carbon::now()->subHours(10))
              ->where('customer_orders.user_id',$user_id)->limit(1)
              ->get(['customer_orders.user_id','customer_orders.price','customer_orders.quantity','customer_orders.created_at','users.name','users.telephone','users.address','users.town',
              'users.division','users.street','users.plot_number','users.email','shops.item_name']);
             return view('customershoppingorders::print_order_now',compact('print_customer_order'));
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('customershoppingorders::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('customershoppingorders::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('customershoppingorders::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
