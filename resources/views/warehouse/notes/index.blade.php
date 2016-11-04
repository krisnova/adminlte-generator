@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Notes</div>
                    <div class="panel-body">

                        <a href="{{ url('/warehouse/notes/create') }}" class="btn btn-primary btn-xs"
                           title="Add New Note"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Notable Id</th>
                                    <th> User Id</th>
                                    <th> Notable Type</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($notes as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->notable_id }}</td>
                                        <td>{{ $item->user_id }}</td>
                                        <td>{{ $item->notable_type }}</td>
                                        <td>
                                            <a href="{{ url('/warehouse/notes/' . $item->id) }}"
                                               class="btn btn-success btn-xs" title="View Note"><span
                                                        class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/warehouse/notes/' . $item->id . '/edit') }}"
                                               class="btn btn-primary btn-xs" title="Edit Note"><span
                                                        class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/warehouse/notes', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Note" />', array(
                                                    'type' => 'submit',
                                                    'class' => 'btn btn-danger btn-xs',
                                                    'title' => 'Delete Note',
                                                    'onclick'=>'return confirm("Confirm delete?")'
                                            )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $notes->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection