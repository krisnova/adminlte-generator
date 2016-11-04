@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Alerts</div>
                    <div class="panel-body">

                        <a href="{{ url('/warehouse/alerts/create') }}" class="btn btn-primary btn-xs"
                           title="Add New Alert"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Observer Id</th>
                                    <th> Channel Id</th>
                                    <th> Priority</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($alerts as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->observer_id }}</td>
                                        <td>{{ $item->channel_id }}</td>
                                        <td>{{ $item->priority }}</td>
                                        <td>
                                            <a href="{{ url('/warehouse/alerts/' . $item->id) }}"
                                               class="btn btn-success btn-xs" title="View Alert"><span
                                                        class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/warehouse/alerts/' . $item->id . '/edit') }}"
                                               class="btn btn-primary btn-xs" title="Edit Alert"><span
                                                        class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/warehouse/alerts', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Alert" />', array(
                                                    'type' => 'submit',
                                                    'class' => 'btn btn-danger btn-xs',
                                                    'title' => 'Delete Alert',
                                                    'onclick'=>'return confirm("Confirm delete?")'
                                            )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $alerts->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection