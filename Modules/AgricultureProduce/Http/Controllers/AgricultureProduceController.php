<?php

namespace Modules\AgricultureProduce\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AgricultureProduceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('agricultureproduce::index');
    }

    /**
     * This function gets Agriculture Produce  Category
     */
    public function getProduceCategory()
    {
        return view('agricultureproduce::produce_category');
    }

    /**
     * This function gets Agriculture Produce
     */
    public function getProduce()
    {
        return view('agricultureproduce::produce');
    }

    /**
     * This function gets Agriculture Produce for the logged in user
     */
    public function getMyProduce()
    {
        return view('agricultureproduce::my_produce');
    }

    /**
     * Thisfunction gets produce details when u want to view
     */
    public function getProduceDetails($produces_id)
    {
        return view('agricultureproduce::produce_details', compact('produces_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create()
    {
        return view('agricultureproduce::create');
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
        return view('agricultureproduce::show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('agricultureproduce::edit');
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
