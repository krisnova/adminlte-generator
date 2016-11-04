@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Note {{ $note->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('warehouse/notes/' . $note->id . '/edit') }}" class="btn btn-primary btn-xs"
                           title="Edit Note"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['warehouse/notes', $note->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'title' => 'Delete Note',
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
                                    <td>{{ $note->id }}</td>
                                </tr>
                                <tr>
                                    <th> Notable Id</th>
                                    <td> {{ $note->notable_id }} </td>
                                </tr>
                                <tr>
                                    <th> User Id</th>
                                    <td> {{ $note->user_id }} </td>
                                </tr>
                                <tr>
                                    <th> Notable Type</th>
                                    <td> {{ $note->notable_type }} </td>
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