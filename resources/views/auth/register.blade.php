@extends('layouts.empty')
@section('title', 'register')
@section('content')
    <div class="block block--modal" data-block-color="default">
        <header class="block__title">
          <h3>Register</h3>
        </header>
        <div class="block__content">
            <a href="{{ route('connect.facebook')}}">Reigster with fb</a>
            @if ($errors->has('email'))
                <span class="block-alert">
                    This email asscoatied with this facebook account already exist.
                </span>
            @endif
        </div>
    </div>
@endsection
