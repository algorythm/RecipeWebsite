@extends('layouts.app')
@section('head')
  <link rel="stylesheet" href="/css/custom_auth.css" media="screen">
@endsection

@section('content')
<div class="container">

    <form role="form" method="POST" action="{{ url('/register') }}">
      {{ csrf_field() }}
      <div class="group{{ $errors->has('name') ? ' has-error' : '' }}">
        <input type="text" name="name" value="{{ old('name') }}">
        <label for="name">Name</label>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
      </div>

      <div class="group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" name="email" value="{{ old('email') }}"><span class="highlight"></span><span class="bar"></span>
        <label>E-Mail Address</label>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
      <div class="group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" name="password"><span class="highlight"></span><span class="bar"></span>
        <label>Password</label>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>

      <div class="group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <input id="password-confirm" type="password" name="password_confirmation"><span class="highlight"></span><span class="bar"></span>
        <label>Confirm Password</label>

        @if ($errors->has('password_confirmation'))
          <span class="help-block">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
          </span>
        @endif
      </div>

      <button type="submit" class="button buttonBlue">Login
        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
      </button>

      <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
    </form>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="/js/index.js"></script>
</div>
@endsection
