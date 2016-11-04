<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Alert;
use Illuminate\Http\Request;
use Session;

class AlertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $alerts = Alert::paginate(25);

        return view('warehouse.alerts.index', compact('alerts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('warehouse.alerts.create');
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

        Alert::create($requestData);

        Session::flash('flash_message', 'Alert added!');

        return redirect('warehouse/alerts');
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
        $alert = Alert::findOrFail($id);

        return view('warehouse.alerts.show', compact('alert'));
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
        $alert = Alert::findOrFail($id);

        return view('warehouse.alerts.edit', compact('alert'));
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

        $alert = Alert::findOrFail($id);
        $alert->update($requestData);

        Session::flash('flash_message', 'Alert updated!');

        return redirect('warehouse/alerts');
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
        Alert::destroy($id);

        Session::flash('flash_message', 'Alert deleted!');

        return redirect('warehouse/alerts');
    }
}
