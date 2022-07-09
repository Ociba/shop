<?php

namespace Modules\CustomerShoppingOrders\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
        return view('customershoppingorders::print_order_now',compact('user_id'));
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
