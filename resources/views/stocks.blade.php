{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
<ul>
    <li>
        {!! Form::label('product_id', 'Product_id:') !!}
        {!! Form::text('product_id') !!}
    </li>
    <li>
        {!! Form::label('office_id', 'Office_id:') !!}
        {!! Form::text('office_id') !!}
    </li>
    <li>
        {!! Form::label('quantity', 'Quantity:') !!}
        {!! Form::text('quantity') !!}
    </li>
    <li>
        {!! Form::label('priority', 'Priority:') !!}
        {!! Form::text('priority') !!}
    </li>
    <li>
        {!! Form::label('forced', 'Forced:') !!}
        {!! Form::text('forced') !!}
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