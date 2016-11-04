<div class="form-group {{ $errors->has('product_id') ? 'has-error' : ''}}">
    {!! Form::label('product_id', 'Product Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">

        {!! Form::select('product_id', $products, null, ['class' => 'form-control']) !!}
        {!! $errors->first('product_id', '<p class="help-block">:message</p>') !!}


    </div>
</div>
<div class="form-group {{ $errors->has('office_id') ? 'has-error' : ''}}">
    {!! Form::label('office_id', 'Office Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('office_id', $offices, null, ['class' => 'form-control']) !!}
        {!! $errors->first('office_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    {!! Form::label('quantity', 'Quantity', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
        {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('priority') ? 'has-error' : ''}}">
    {!! Form::label('priority', 'Priority', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('priority', null, ['class' => 'form-control']) !!}
        {!! $errors->first('priority', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('forced') ? 'has-error' : ''}}">
    {!! Form::label('forced', 'Forced', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
            <label>{!! Form::radio('forced', '1') !!} Yes</label>
        </div>
        <div class="checkbox">
            <label>{!! Form::radio('forced', '0', true) !!} No</label>
        </div>
        {!! $errors->first('forced', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    {!! Form::label('active', 'Active', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
            <label>{!! Form::radio('active', '1') !!} Yes</label>
        </div>
        <div class="checkbox">
            <label>{!! Form::radio('active', '0', true) !!} No</label>
        </div>
        {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>