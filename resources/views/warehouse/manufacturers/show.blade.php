@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Manufacturer {{ $manufacturer->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('warehouse/manufacturers/' . $manufacturer->id . '/edit') }}"
                           class="btn btn-primary btn-xs" title="Edit Manufacturer"><span
                                    class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['warehouse/manufacturers', $manufacturer->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'title' => 'Delete Manufacturer',
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
                                    <td>{{ $manufacturer->id }}</td>
                                </tr>
                                <tr>
                                    <th> Name</th>
                                    <td> {{ $manufacturer->name }} </td>
                                </tr>
                                <tr>
                                    <th> Url</th>
                                    <td> {{ $manufacturer->url }} </td>
                                </tr>
                                <tr>
                                    <th> Image</th>
                                    <td> {{ $manufacturer->image }} </td>
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