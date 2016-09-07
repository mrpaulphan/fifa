<div class="modal-overlay">
  <div class="modal">
    <header class="modal__header">
      <h3>Login</h3>
    </header>
    <form class="modal-form" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <div class="modal-form__group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>
              @if ($errors->has('email'))
                  <span class="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>

        <div class="modal-form__group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>
                <input id="password" type="password" class="form-control" name="password">
                @if ($errors->has('password'))
                    <span class="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        </div>

        <div class="modal-form__group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
        </div>

        <div class="modal-form__group">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>

                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                    Forgot Your Password?
                </a>
        </div>
    </form>
  </div>
</div>
