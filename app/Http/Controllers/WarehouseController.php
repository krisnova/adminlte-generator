<?php

namespace App\Http\Controllers;

/* Importatamos el modelo */
use App\Warehouse as Warehouse;
use Illuminate\Http\Request;

use App\Http\Requests;



class WarehouseController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        /* Cargamos los datos existentes en cvoed unidads */
        //$temp = \Auth::user()->username;
        $warehouses = Warehouse::take(30)->get();


        return view('warehouses/list', compact('warehouses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
return view('werehouses/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        return 'Creating a Werehouse';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return 'Show warehouses';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return 'Edit warehouses';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

    }

}

/*

{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('werehouse_name', 'Werehouse_name:') !!}
			{!! Form::textarea('werehouse_name') !!}
		</li>
		<li>
			{!! Form::label('country', 'Country:') !!}
			{!! Form::textarea('country') !!}
		</li>
		<li>
			{!! Form::label('state', 'State:') !!}
			{!! Form::textarea('state') !!}
		</li>
		<li>
			{!! Form::label('city', 'City:') !!}
			{!! Form::textarea('city') !!}
		</li>
		<li>
			{!! Form::label('street', 'Street:') !!}
			{!! Form::textarea('street') !!}
		</li>
		<li>
			{!! Form::label('number', 'Number:') !!}
			{!! Form::text('number') !!}
		</li>
		<li>
			{!! Form::label('postal_code', 'Postal_code:') !!}
			{!! Form::text('postal_code') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
 * */

?>
