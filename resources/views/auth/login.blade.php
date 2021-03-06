@extends('layouts.app')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="/"><i class="fa fa-book"></i><b> UNY</b>REPORT</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><i class="fa fa-key"></i> Sign in to start your application</p>

    <form method="POST" action="{{ url('/login') }}">
    {{ csrf_field() }}
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

        <span class="fa fa-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                         <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
        <input  id="password" type="password" class="form-control" name="password" required>
        <span class="fa fa-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <br>
    <a href="{{ url('/password/reset') }}">I forgot my password</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection
