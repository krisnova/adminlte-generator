<div class="form-group {{ $errors->has('notable_id') ? 'has-error' : ''}}">
    {!! Form::label('notable_id', 'Notable Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('notable_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('notable_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id', 'User Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('notable_type') ? 'has-error' : ''}}">
    {!! Form::label('notable_type', 'Notable Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('notable_type', null, ['class' => 'form-control']) !!}
        {!! $errors->first('notable_type', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content', 'Content', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
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