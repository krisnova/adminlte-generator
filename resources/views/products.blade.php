{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
<ul>
    <li>
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name') !!}
    </li>
    <li>
        {!! Form::label('manufacturer_id', 'Manufacturer_id:') !!}
        {!! Form::text('manufacturer_id') !!}
    </li>
    <li>
        {!! Form::label('gtin', 'Gtin:') !!}
        {!! Form::text('gtin') !!}
    </li>
    <li>
        {!! Form::label('repurchase_price', 'Repurchase_price:') !!}
        {!! Form::text('repurchase_price') !!}
    </li>
    <li>
        {!! Form::label('retail_price', 'Retail_price:') !!}
        {!! Form::text('retail_price') !!}
    </li>
    <li>
        {!! Form::label('weight', 'Weight:') !!}
        {!! Form::text('weight') !!}
    </li>
    <li>
        {!! Form::submit() !!}
    </li>
</ul>
{!! Form::close() !!}