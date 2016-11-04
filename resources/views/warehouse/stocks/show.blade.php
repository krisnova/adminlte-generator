@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Stock {{ $stock->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('warehouse/stocks/' . $stock->id . '/edit') }}" class="btn btn-primary btn-xs"
                           title="Edit Stock"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['warehouse/stocks', $stock->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'title' => 'Delete Stock',
                                'onclick'=>'return confirm("Confirm delete?")'
                        ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $stock->id }}</td>
                                </tr>
                                <tr>
                                    <th> Product Id</th>
                                    <td> {{ $stock->product_id }} </td>
                                </tr>
                                <tr>
                                    <th> Office Id</th>
                                    <td> {{ $stock->office_id }} </td>
                                </tr>
                                <tr>
                                    <th> Quantity</th>
                                    <td> {{ $stock->quantity }} </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection