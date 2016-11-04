<div class="form-group {{ $errors->has('prefix') ? 'has-error' : ''}}">
    {!! Form::label('prefix', 'Prefix', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('prefix', null, ['class' => 'form-control']) !!}
        {!! $errors->first('prefix', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('priority') ? 'has-error' : ''}}">
    {!! Form::label('priority', 'Priority', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('priority', null, ['class' => 'form-control']) !!}
        {!! $errors->first('priority', '<p class="help-block">:message</p>') !!}
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