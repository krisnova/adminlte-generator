<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Office;
use App\Models\Product;

use App\Stock;
use Illuminate\Http\Request;
use Session;

class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $stocks = Stock::paginate(25);

        return view('warehouse.stocks.index', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {


        $products = Product::pluck('name', 'id');

        //return view('warehouse.stocks.create', compact('id', 'products'));


        $offices = Office::pluck('name', 'id');

        return view('warehouse.stocks.create', compact('id', 'products'), compact('id', 'offices'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $requestData = $request->all();

        Stock::create($requestData);

        Session::flash('flash_message', 'Stock added!');

        return redirect('warehouse/stocks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $stock = Stock::findOrFail($id);

        return view('warehouse.stocks.show', compact('stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {

        $products = Product::pluck('name', 'id');
        $offices = Office::pluck('name', 'id');
        $stock = Stock::findOrFail($id);

        return view('warehouse.stocks.edit', compact('stock', 'products', 'offices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {

        $requestData = $request->all();

        $stock = Stock::findOrFail($id);
        $stock->update($requestData);

        Session::flash('flash_message', 'Stock updated!');

        return redirect('warehouse/stocks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Stock::destroy($id);

        Session::flash('flash_message', 'Stock deleted!');

        return redirect('warehouse/stocks');
    }
}
