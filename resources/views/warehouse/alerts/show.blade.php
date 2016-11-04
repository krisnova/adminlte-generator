@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Alert {{ $alert->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('warehouse/alerts/' . $alert->id . '/edit') }}" class="btn btn-primary btn-xs"
                           title="Edit Alert"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['warehouse/alerts', $alert->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'title' => 'Delete Alert',
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
                                    <td>{{ $alert->id }}</td>
                                </tr>
                                <tr>
                                    <th> Observer Id</th>
                                    <td> {{ $alert->observer_id }} </td>
                                </tr>
                                <tr>
                                    <th> Channel Id</th>
                                    <td> {{ $alert->channel_id }} </td>
                                </tr>
                                <tr>
                                    <th> Priority</th>
                                    <td> {{ $alert->priority }} </td>
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