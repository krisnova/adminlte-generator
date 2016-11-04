@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Offices</div>
                    <div class="panel-body">

                        <a href="{{ url('/warehouse/offices/create') }}" class="btn btn-primary btn-xs"
                           title="Add New Office"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Prefix</th>
                                    <th> Name</th>
                                    <th> Priority</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($offices as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->prefix }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->priority }}</td>
                                        <td>
                                            <a href="{{ url('/warehouse/offices/' . $item->id) }}"
                                               class="btn btn-success btn-xs" title="View Office"><span
                                                        class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/warehouse/offices/' . $item->id . '/edit') }}"
                                               class="btn btn-primary btn-xs" title="Edit Office"><span
                                                        class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/warehouse/offices', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Office" />', array(
                                                    'type' => 'submit',
                                                    'class' => 'btn btn-danger btn-xs',
                                                    'title' => 'Delete Office',
                                                    'onclick'=>'return confirm("Confirm delete?")'
                                            )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $offices->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection