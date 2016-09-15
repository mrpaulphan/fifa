@extends('layouts.empty')

@section('title', 'login')
@section('content')

  <div class="block--modal">
    <header class="block__title">
      <h3>Login</h3>
    </header>
    <form class="form" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <div class="form__group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="form__label">E-Mail Address</label>
            <input id="email" type="email" class="form__input" name="email" value="{{ old('email') }}">
              @if ($errors->has('email'))
                  <span class="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>

        <div class="form__group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="form__label">Password</label>
                <input id="password" type="password" class="form__input" name="password">
                @if ($errors->has('password'))
                    <span class="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form__group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
        </div>

        <div class="form__group">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>

                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                    Forgot Your Password?
                </a>
        </div>
    </form>
  </div>


@endsection
