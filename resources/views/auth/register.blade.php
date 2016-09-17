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
                        <span class="block-help">
                            {{ $errors->first('name') }}
                        </span>
                    @endif
                </div>

                <div class="form__group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label class="form__label" for="username" >Username</label>
                    <input class="form__input" id="username" type="text"  name="username" value="{{ old('username') }}" autofocus>
                    @if ($errors->has('username'))
                        <span class="block-help">
                            {{ $errors->first('username') }}
                        </span>
                    @endif
                </div>

                <div class="form__group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="form__label" for="email" >E-Mail Address</label>
                    <input class="form__input" id="email" type="email"  name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="block-help">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                </div>

                <div class="form__group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="form__label" for="password" >Password</label>
                    <input class="form__input" id="password" type="password"  name="password">
                    @if ($errors->has('password'))
                        <span class="block-help">
                            {{ $errors->first('password') }}
                        </span>
                    @endif
                </div>

                <div class="form__group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label class="form__label" for="password-confirm" >Confirm Password</label>
                    <input class="form__input" id="password-confirm" type="password"  name="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                        <span class="block-help">
                            {{ $errors->first('password_confirmation') }}
                        </span>
                    @endif
                </div>
                <div class="layout-split-2--apart">
                    <div class="column">
                        <p><a href="{{ route('show.landing')}}" class="button--secondary">Cancel</a></p>
                    </div>
                    <div class="column">
                        <button type="submit" class="button--primary">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
