<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('manufacturer_id') ? 'has-error' : ''}}">
    {!! Form::label('manufacturer_id', 'Manufacturer Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">


        {!! Form::select('manufacturer_id', $manufacturers, null, ['class' => 'form-control']) !!}
        {!! $errors->first('manufacturer_id', '<p class="help-block">:message</p>') !!}


    </div>
</div>
<div class="form-group {{ $errors->has('gtin') ? 'has-error' : ''}}">
    {!! Form::label('gtin', 'Gtin', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('gtin', null, ['class' => 'form-control']) !!}
        {!! $errors->first('gtin', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('repurchase_price') ? 'has-error' : ''}}">
    {!! Form::label('repurchase_price', 'Repurchase Price', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('repurchase_price', null, ['class' => 'form-control']) !!}
        {!! $errors->first('repurchase_price', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('retail_price') ? 'has-error' : ''}}">
    {!! Form::label('retail_price', 'Retail Price', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('retail_price', null, ['class' => 'form-control']) !!}
        {!! $errors->first('retail_price', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('weight') ? 'has-error' : ''}}">
    {!! Form::label('weight', 'Weight', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('weight', null, ['class' => 'form-control']) !!}
        {!! $errors->first('weight', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('image', null, ['class' => 'form-control']) !!}
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>