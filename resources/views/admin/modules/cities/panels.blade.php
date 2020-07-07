<div class="tab-pane fade show active" id="tab1">
    <h2 class="hidden">&nbsp;</h2>
    <div class="form-group form-row {{ $errors->first('state_id') ? 'has-error' : '' }}">
        {!! Form::label('state_id', trans('validation.attributes.state_id').' *', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::select('state_id', $catalog_state_id, null, ['id' => 'country_id', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.state_id')]) !!}
            <span class="help-block">{{ $errors->first('state_id', ':message') }}</span>
        </div>
    </div>

    <div class="form-group form-row {{ $errors->first('name') ? 'has-error' : '' }}">
        {!! Form::label('name', trans('validation.attributes.name').' *', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('name', old('name'), ['id' => 'name', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.name')]) !!}
            <span class="help-block">{{ $errors->first('name', ':message') }}</span>
        </div>
    </div>
</div>
