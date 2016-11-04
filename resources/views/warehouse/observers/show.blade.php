@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Observer {{ $observer->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('warehouse/observers/' . $observer->id . '/edit') }}"
                           class="btn btn-primary btn-xs" title="Edit Observer"><span class="glyphicon glyphicon-pencil"
                                                                                      aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['warehouse/observers', $observer->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'title' => 'Delete Observer',
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
                                    <td>{{ $observer->id }}</td>
                                </tr>
                                <tr>
                                    <th> Product Id</th>
                                    <td> {{ $observer->product_id }} </td>
                                </tr>
                                <tr>
                                    <th> User Id</th>
                                    <td> {{ $observer->user_id }} </td>
                                </tr>
                                <tr>
                                    <th> Stock</th>
                                    <td> {{ $observer->stock }} </td>
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