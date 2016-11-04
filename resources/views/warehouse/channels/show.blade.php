@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Channel {{ $channel->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('warehouse/channels/' . $channel->id . '/edit') }}"
                           class="btn btn-primary btn-xs" title="Edit Channel"><span class="glyphicon glyphicon-pencil"
                                                                                     aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['warehouse/channels', $channel->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'title' => 'Delete Channel',
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
                                    <td>{{ $channel->id }}</td>
                                </tr>
                                <tr>
                                    <th> Name</th>
                                    <td> {{ $channel->name }} </td>
                                </tr>
                                <tr>
                                    <th> Notification</th>
                                    <td> {{ $channel->notification }} </td>
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