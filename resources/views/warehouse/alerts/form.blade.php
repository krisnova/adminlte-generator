<div class="form-group {{ $errors->has('observer_id') ? 'has-error' : ''}}">
    {!! Form::label('observer_id', 'Observer Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('observer_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('observer_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('channel_id') ? 'has-error' : ''}}">
    {!! Form::label('channel_id', 'Channel Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('channel_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('channel_id', '<p class="help-block">:message</p>') !!}
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