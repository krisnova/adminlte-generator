@extends('layouts.app')
@section('content')
{!! Form::model($warehouse, ['action' => 'WarehouseController@store']) !!}

{!! csrf_field() !!}


    <div class="form-group">
        {!! Form::label('werehouse_name', 'Warehouse Name') !!}
        {!! Form::text('werehouse_name', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('country', 'Country') !!}
        {!! Form::text('country', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('state', 'State') !!}
        {!! Form::text('state', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('street', 'Street') !!}
        {!! Form::text('street', '', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('number', 'Number') !!}
        {!! Form::text('number', '', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('postal_code', 'Postal_code') !!}
        {!! Form::text('postal_code', '', ['class' => 'form-control']) !!}
    </div>

    <button class="btn btn-success" type="submit">Add the Warehouse!</button>
{!! Form::close() !!}

@endsection