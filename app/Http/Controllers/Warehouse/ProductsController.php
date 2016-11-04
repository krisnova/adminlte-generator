<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Manufacturer;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $products = Product::paginate(25);

        //$products = Product::with('manufacturer')->find(1);


        //$variable = Product::with('designs', 'design.user')->find(1);
        return view('warehouse.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        $manufacturers = Manufacturer::pluck('name', 'id');

        return view('warehouse.products.create', compact('id', 'manufacturers'));

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

        Product::create($requestData);

        Session::flash('flash_message', 'Product added!');

        return redirect('warehouse/products');
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
        $product = Product::findOrFail($id);

        return view('warehouse.products.show', compact('product'));
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

        $manufacturers = Manufacturer::pluck('name', 'id');


        $product = Product::findOrFail($id);

        return view('warehouse.products.edit', compact('product', 'manufacturers'));
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

        $product = Product::findOrFail($id);
        $product->update($requestData);

        Session::flash('flash_message', 'Product updated!');

        return redirect('warehouse/products');
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
        Product::destroy($id);

        Session::flash('flash_message', 'Product deleted!');

        return redirect('warehouse/products');
    }
}
