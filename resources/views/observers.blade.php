{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
<ul>
    <li>
        {!! Form::label('product_id', 'Product_id:') !!}
        {!! Form::text('product_id') !!}
    </li>
    <li>
        {!! Form::label('user_id', 'User_id:') !!}
        {!! Form::text('user_id') !!}
    </li>
    <li>
        {!! Form::label('stock', 'Stock:') !!}
        {!! Form::text('stock') !!}
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