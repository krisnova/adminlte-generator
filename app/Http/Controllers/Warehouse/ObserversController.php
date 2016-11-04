<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Observer;
use Illuminate\Http\Request;
use Session;

class ObserversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $observers = Observer::paginate(25);

        return view('warehouse.observers.index', compact('observers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('warehouse.observers.create');
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

        Observer::create($requestData);

        Session::flash('flash_message', 'Observer added!');

        return redirect('warehouse/observers');
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
        $observer = Observer::findOrFail($id);

        return view('warehouse.observers.show', compact('observer'));
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
        $observer = Observer::findOrFail($id);

        return view('warehouse.observers.edit', compact('observer'));
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

        $observer = Observer::findOrFail($id);
        $observer->update($requestData);

        Session::flash('flash_message', 'Observer updated!');

        return redirect('warehouse/observers');
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
        Observer::destroy($id);

        Session::flash('flash_message', 'Observer deleted!');

        return redirect('warehouse/observers');
    }
}
