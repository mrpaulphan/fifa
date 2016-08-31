@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('post.player') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                            <label for="position" class="col-md-4 control-label">Position</label>

                            <div class="col-md-6">
                                <input id="position" type="text" class="form-control" name="position" value="{{ old('position') }}" autofocus>

                                @if ($errors->has('position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('overall') ? ' has-error' : '' }}">
                            <label for="overall" class="col-md-4 control-label">Overall</label>

                            <div class="col-md-6">
                                <input id="overall" type="text" class="form-control" name="overall" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('overall'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('overall') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="age" class="col-md-4 control-label">Age</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control" name="age" value="{{ old('age') }}" autofocus>

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('appearances') ? ' has-error' : '' }}">
                            <label for="appearances" class="col-md-4 control-label">Appearances</label>

                            <div class="col-md-6">
                                <input id="appearances" type="text" class="form-control" name="appearances" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('appearances'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('appearances') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('goals') ? ' has-error' : '' }}">
                            <label for="goals" class="col-md-4 control-label">Goals</label>

                            <div class="col-md-6">
                                <input id="goals" type="text" class="form-control" name="goals" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('goals'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('goals') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('assists') ? ' has-error' : '' }}">
                            <label for="assists" class="col-md-4 control-label">Assists</label>

                            <div class="col-md-6">
                                <input id="assists" type="text" class="form-control" name="assists" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('assists'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assists') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('joined') ? ' has-error' : '' }}">
                            <label for="joined" class="col-md-4 control-label">Joined</label>

                            <div class="col-md-6">
                                <input id="joined" type="text" class="form-control" name="joined" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('joined'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('joined') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('form') ? ' has-error' : '' }}">
                            <label for="form" class="col-md-4 control-label">Form</label>

                            <div class="col-md-6">
                                <input id="form" type="text" class="form-control" name="form" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('form'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('form') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contract') ? ' has-error' : '' }}">
                            <label for="contract" class="col-md-4 control-label">Contract</label>

                            <div class="col-md-6">
                                <input id="contract" type="text" class="form-control" name="contract" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('contract'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contract') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
                            <label for="nationality" class="col-md-4 control-label">nationality</label>

                            <div class="col-md-6">
                                <input id="nationality" type="text" class="form-control" name="nationality" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('nationality'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nationality') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
                            <label for="value" class="col-md-4 control-label">value</label>

                            <div class="col-md-6">
                                <input id="value" type="text" class="form-control" name="value" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('value'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('value') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('wages') ? ' has-error' : '' }}">
                            <label for="wages" class="col-md-4 control-label">wages</label>

                            <div class="col-md-6">
                                <input id="wages" type="text" class="form-control" name="wages" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('wages'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('wages') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create Project
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
