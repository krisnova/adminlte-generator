@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Office {{ $office->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('warehouse/offices/' . $office->id . '/edit') }}" class="btn btn-primary btn-xs"
                           title="Edit Office"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['warehouse/offices', $office->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'title' => 'Delete Office',
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
                                    <td>{{ $office->id }}</td>
                                </tr>
                                <tr>
                                    <th> Prefix</th>
                                    <td> {{ $office->prefix }} </td>
                                </tr>
                                <tr>
                                    <th> Name</th>
                                    <td> {{ $office->name }} </td>
                                </tr>
                                <tr>
                                    <th> Priority</th>
                                    <td> {{ $office->priority }} </td>
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