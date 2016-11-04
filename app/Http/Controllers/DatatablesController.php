<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
//use Yajra\Datatables\Datatables;

use Datatables;

class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */


    public function index()
    {

        return view('datatables.index');

    }

    public function getIndex()
    {
        return view('datatables.index');
    }
    public function anyData()
    {
      //  return Datatables::of(User::query())->make(true);
     $users = User::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return Datatables::of($users)
            ->addColumn('action_edit', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->addColumn('action_create', function () {
                return '<a href="/datatables/create">Add a Wherehouse</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->make(true);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return 'Crear Datatables user';
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // return Datatables::of(User::query())->make(true);

    }



    public function edit()
    {
return "editar campos";
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */

}

