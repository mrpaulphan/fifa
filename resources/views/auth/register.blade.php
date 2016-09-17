@extends('layouts.empty')
@section('title', 'register')
@section('content')
    <div class="block block--modal block-color--default">
        <header class="block__title">
          <h3>Register</h3>
        </header>
        <div class="block__content">
            <form  role="form" method="POST" action="{{ url('/register') }}" spacing=".5">
                {{ csrf_field() }}
                <div class="form__group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label  class="form__label" for="name">Name</label>
                    <input class="form__input" id="name" type="text" name="name" value="{{ old('name') }}" autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form__group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label class="form__label" for="username" >Username</label>
                    <input class="form__input" id="username" type="text"  name="username" value="{{ old('username') }}" autofocus>
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form__group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="form__label" for="email" >E-Mail Address</label>
                    <input class="form__input" id="email" type="email"  name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form__group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="form__label" for="password" >Password</label>
                    <input class="form__input" id="password" type="password"  name="password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form__group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label class="form__label" for="password-confirm" >Confirm Password</label>
                    <input class="form__input" id="password-confirm" type="password"  name="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form__group">
                        <button type="submit" class="button button--primary">
                            Register
                        </button>
                </div>
            </form>
        </div>
    </div>
@endsection
