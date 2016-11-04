<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Office;
use Illuminate\Http\Request;
use Session;

class OfficesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $offices = Office::paginate(25);

        return view('warehouse.offices.index', compact('offices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('warehouse.offices.create');
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

        Office::create($requestData);

        Session::flash('flash_message', 'Office added!');

        return redirect('warehouse/offices');
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
        $office = Office::findOrFail($id);

        return view('warehouse.offices.show', compact('office'));
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
        $office = Office::findOrFail($id);

        return view('warehouse.offices.edit', compact('office'));
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

        $office = Office::findOrFail($id);
        $office->update($requestData);

        Session::flash('flash_message', 'Office updated!');

        return redirect('warehouse/offices');
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
        Office::destroy($id);

        Session::flash('flash_message', 'Office deleted!');

        return redirect('warehouse/offices');
    }
}
