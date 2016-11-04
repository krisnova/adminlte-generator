{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
<ul>
    <li>
        {!! Form::label('prefix', 'Prefix:') !!}
        {!! Form::text('prefix') !!}
    </li>
    <li>
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name') !!}
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