<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Manufacturer;
use Illuminate\Http\Request;
use Session;

class ManufacturersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $manufacturers = Manufacturer::paginate(25);

        return view('warehouse.manufacturers.index', compact('manufacturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('warehouse.manufacturers.create');
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

        Manufacturer::create($requestData);

        Session::flash('flash_message', 'Manufacturer added!');

        return redirect('warehouse/manufacturers');
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
        $manufacturer = Manufacturer::findOrFail($id);

        return view('warehouse.manufacturers.show', compact('manufacturer'));
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
        $manufacturer = Manufacturer::findOrFail($id);

        return view('warehouse.manufacturers.edit', compact('manufacturer'));
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

        $manufacturer = Manufacturer::findOrFail($id);
        $manufacturer->update($requestData);

        Session::flash('flash_message', 'Manufacturer updated!');

        return redirect('warehouse/manufacturers');
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
        Manufacturer::destroy($id);

        Session::flash('flash_message', 'Manufacturer deleted!');

        return redirect('warehouse/manufacturers');
    }
}
