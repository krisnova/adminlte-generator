{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
<ul>
    <li>
        {!! Form::label('notable_id', 'Notable_id:') !!}
        {!! Form::text('notable_id') !!}
    </li>
    <li>
        {!! Form::label('notable_type', 'Notable_type:') !!}
        {!! Form::text('notable_type') !!}
    </li>
    <li>
        {!! Form::label('content', 'Content:') !!}
        {!! Form::textarea('content') !!}
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
        {!! Form::label('user_id', 'User_id:') !!}
        {!! Form::text('user_id') !!}
    </li>
    <li>
        {!! Form::submit() !!}
    </li>
</ul>
{!! Form::close() !!}