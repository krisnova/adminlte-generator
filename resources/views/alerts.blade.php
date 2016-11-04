{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
<ul>
    <li>
        {!! Form::label('observer_id', 'Observer_id:') !!}
        {!! Form::text('observer_id') !!}
    </li>
    <li>
        {!! Form::label('channel_id', 'Channel_id:') !!}
        {!! Form::text('channel_id') !!}
    </li>
    <li>
        {!! Form::label('priority', 'Priority:') !!}
        {!! Form::text('priority') !!}
    </li>
    <li>
        {!! Form::label('active', 'Active:') !!}
        {!! Form::text('active') !!}
    </li>
    <li>
        {!! Form::submit() !!}
    </li>
</ul>
{!! Form::close() !!}