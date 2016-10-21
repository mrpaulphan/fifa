@extends('layouts.layout')

@section('title', 'login')
@section('content')

  <div class="block block--modal " data-block-color="default">
    <header class="block__title">
      <h3>Login</h3>
    </header>
    <div class="block__content">
        <a href="{{ route('connect.facebook')}}">Login with Facebook</a>
    </div>

  </div>


@endsection
