@extends('layout.principal')

@section('title', $login_title = trans('auth.title.login'))

@section('styles')
@endsection

@section('content')
    <section class="container-custom pt-60 pb-60 h-100">
      <div class="row h-100 align-items-center justify-content-center">
        <div class="col-md-5">
          <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header row">
              <div class="col-3">
                <img src="{{ env('APP_URL') }}/assets/images/logo_b.png" width="100px">
              </div>
              <div class="col-6">
                <h2 class="text-center font-weight-light my-4">
                  {{ $login_title }}
                </h2>
              </div>

            </div>
            <div class="card-body">
              {!! Form::open(['route' => 'login', 'method' => 'post', 'id' => 'formValidation', 'class' => 'form-horizontal']) !!}
                  {!! Form::hidden('previous', $previous) !!}
                  <div class="form-group form-row {{ $errors->first('email') ? 'has-error' : '' }}">
                      <div class="col-md-12">
                          {!! Form::label("email", trans('validation.attributes.email'), ["class"=>"small mb-1"]) !!}
            				      {!! Form::text('email', old('email'), ['id' => 'email', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.enter_email')]) !!}
                          <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                      </div>
                  </div>
                  <div class="form-group form-row {{ $errors->first('password') ? 'has-error' : '' }}">
                      <div class="col-md-12">
                          {!! Form::label("password", trans('validation.attributes.password'), ["class"=>"small mb-1"]) !!}
                          {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.enter_password')]) !!}
                          <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                      </div>
                  </div>
                  <div class="form-group form-row">
                      <div class="col-md-12 text-right">
                          {!! Form::submit(trans('auth.title.login'), ['class' => 'btn btn-primary']) !!}
                      </div>
                  </div>
              {!! Form::close() !!}
            </div>
            <div class="card-footer text-center">
              <div class="small">
                {{ link_to_route('forgot-password', trans('auth.title.password_recovery_text')) }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <style>
      body{
        background-color: #000;
      }
    </style>

@endsection

@section('scripts')
    @include('auth.formvalidation.login')
@endsection
