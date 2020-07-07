<div class="tab-pane fade show active" id="tab1">
    <h2 class="hidden">&nbsp;</h2>
    <div class="form-group form-row {{ $errors->first('first_name') ? 'has-error' : '' }}">
        {!! Form::label('first_name', trans('validation.attributes.first_name').' *', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('first_name', old('first_name'), ['id' => 'first_name', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.first_name')]) !!}
            <span class="help-block">{{ $errors->first('first_name', ':message') }}</span>
        </div>
    </div>

    <div class="form-group form-row {{ $errors->first('last_name') ? 'has-error' : '' }}">
        {!! Form::label('last_name', trans('validation.attributes.last_name').' *', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('last_name', old('last_name'), ['id' => 'last_name', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.last_name')]) !!}
            <span class="help-block">{{ $errors->first('last_name', ':message') }}</span>
        </div>
    </div>

    <div class="form-group form-row {{ $errors->first('email') ? 'has-error' : '' }}">
        {!! Form::label('email', trans('validation.attributes.email').' *', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('email', old('email'), ['id' => 'email', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.email')]) !!}
            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
        </div>
    </div>

    <div class="form-group form-row {{ $errors->first('password') ? 'has-error' : '' }}">
        {!! Form::label('password', trans('validation.attributes.password').' *', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.password')]) !!}
            @isset($item)
                <p class="help-block">{{ trans('strings.help.password') }}</p>
            @endisset
            <span class="help-block">{{ $errors->first('password', ':message') }}</span>
        </div>
    </div>

    <div class="form-group form-row {{ $errors->first('password_confirm') ? 'has-error' : '' }}">
        {!! Form::label('password_confirm', trans('validation.attributes.password_confirm').' *', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::password('password_confirm', ['id' => 'password_confirm', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.password_confirm')]) !!}
            @isset($item)
                <p class="help-block">{{ trans('strings.help.password') }}</p>
            @endisset
            <span class="help-block">{{ $errors->first('password_confirm', ':message') }}</span>
        </div>
    </div>

    <div class="form-group form-row {{ $errors->first('role_id') ? 'has-error' : '' }}">
        {!! Form::label('role_id', trans('validation.attributes.role_id').' *', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::select('role_id', $catalog_role_id, null, ['id' => 'role_id', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.role_id')]) !!}
            <span class="help-block">{{ $errors->first('role_id', ':message') }}</span>
        </div>
    </div>
</div>
