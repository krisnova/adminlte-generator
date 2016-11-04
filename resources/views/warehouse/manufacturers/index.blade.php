@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Manufacturers</div>
                    <div class="panel-body">

                        <a href="{{ url('/warehouse/manufacturers/create') }}" class="btn btn-primary btn-xs"
                           title="Add New Manufacturer"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Name</th>
                                    <th> Url</th>
                                    <th> Image</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($manufacturers as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->url }}</td>
                                        <td>{{ $item->image }}</td>
                                        <td>
                                            <a href="{{ url('/warehouse/manufacturers/' . $item->id) }}"
                                               class="btn btn-success btn-xs" title="View Manufacturer"><span
                                                        class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/warehouse/manufacturers/' . $item->id . '/edit') }}"
                                               class="btn btn-primary btn-xs" title="Edit Manufacturer"><span
                                                        class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/warehouse/manufacturers', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Manufacturer" />', array(
                                                    'type' => 'submit',
                                                    'class' => 'btn btn-danger btn-xs',
                                                    'title' => 'Delete Manufacturer',
                                                    'onclick'=>'return confirm("Confirm delete?")'
                                            )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $manufacturers->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection