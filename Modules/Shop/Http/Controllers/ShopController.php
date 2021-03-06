<?php

namespace Modules\Shop\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('shop::index');
    }

    /**
     * This function gets shop items
     */
    public function getShopItems()
    {
        return view('shop::shop_items');
    }

    /**
     * This function gets shop items categories
     */
    public function getShopItemsCategories()
    {
        return view('shop::shop_item_category');
    }
    /**
     * This function gets add classfied or promotion items
     */
    public function addClassfiedAndPromotionItems(){
        return view('shop::add_classfied_or_promotion_items'); 
    }
    /**
     * This function gets shop items categories
     */
    public function getShopItemDetails($shop_id)
    {
        return view('shop::shop_item_details', compact('shop_id'));
    }

    /**
     * This function gets shop discount details
     */
    public function getShopItemDiscountDetails($shop_id)
    {
        return view('shop::discount_details', compact('shop_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create()
    {
        return view('shop::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     *
     * @param  int  $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('shop::show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('shop::edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
