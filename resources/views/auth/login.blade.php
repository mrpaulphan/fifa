@extends('layouts.empty')

@section('title', 'login')
@section('content')

  <div class="block block--modal block-color--default">
    <header class="block__title">
      <h3>Login</h3>
    </header>
    <div class="block__content">
        <form class="form" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div class="form__group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="form__label" for="email">E-Mail Address</label>
            <input class="form__input" id="email" type="email" name="email" value="{{ old('email') }}">
              @if ($errors->has('email'))
                  <span class="block-alert">
                      {{ $errors->first('email') }}
                  </span>
              @endif
        </div>

        <div class="form__group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="form__label">Password</label>
            <input class="form__input" id="password" type="password" name="password">
            @if ($errors->has('password'))
                <span class="block-alert">
                    {{ $errors->first('password') }}
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

        <div class="layout-split-2--apart">
            <div class="column">
                <p><a href="{{ route('show.landing')}}" class="button--secondary">Cancel</a></p>
            </div>
            <div class="column">
                <button type="submit" class="button--primary">Login</button>
            </div>
        </div>
        <div class="form__group">

                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                    Forgot Your Password?
                </a>
        </div>
    </form>
</div>

  </div>


@endsection
