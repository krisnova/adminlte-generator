<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Note;
use Illuminate\Http\Request;
use Session;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $notes = Note::paginate(25);

        return view('warehouse.notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('warehouse.notes.create');
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

        Note::create($requestData);

        Session::flash('flash_message', 'Note added!');

        return redirect('warehouse/notes');
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
        $note = Note::findOrFail($id);

        return view('warehouse.notes.show', compact('note'));
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
        $note = Note::findOrFail($id);

        return view('warehouse.notes.edit', compact('note'));
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

        $note = Note::findOrFail($id);
        $note->update($requestData);

        Session::flash('flash_message', 'Note updated!');

        return redirect('warehouse/notes');
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
        Note::destroy($id);

        Session::flash('flash_message', 'Note deleted!');

        return redirect('warehouse/notes');
    }
}
