@extends('layouts.default')

@section('content')
  @if($team->isEmpty())
    {{-- Empty --}}

    Please create a team
    <form class="" role="form" method="POST" action="{{ route('post.team') }}">
      {{ csrf_field() }}
      <label for="">Team</label>
      <input type="text" name="team"  value="{{ old('username') }}">
      @if ($errors->has('team'))
          <span class="help-block">
              <strong>{{ $errors->first('team') }}</strong>
          </span>
      @endif
      <label for="">Body optional</label>
        <textarea name="body" rows="8" cols="40"></textarea>
        @if ($errors->has('body'))
            <span class="help-block">
                <strong>{{ $errors->first('body') }}</strong>
            </span>
        @endif
      <label for="">Worth</label>
      <input type="number" name="worth"  value="{{ old('username') }}">
      @if ($errors->has('worth'))
          <span class="help-block">
              <strong>{{ $errors->first('worth') }}</strong>
          </span>
      @endif
      <label for="">Budget</label>
      <input type="number" name="budget"  value="{{ old('username') }}">
      @if ($errors->has('budget'))
          <span class="help-block">
              <strong>{{ $errors->first('budget') }}</strong>
          </span>
      @endif
      <label for="">Win</label>
      <input type="number" name="win"  value="{{ old('username') }}">
      @if ($errors->has('win'))
          <span class="help-block">
              <strong>{{ $errors->first('win') }}</strong>
          </span>
      @endif      <label for="">Loss</label>
      <input type="number" name="loss"  value="{{ old('username') }}">
      @if ($errors->has('loss'))
          <span class="help-block">
              <strong>{{ $errors->first('loss') }}</strong>
          </span>
      @endif
      <label for="">Season</label>
      <input type="text" name="season"  value="{{ old('username') }}">
      @if ($errors->has('season'))
          <span class="help-block">
              <strong>{{ $errors->first('season') }}</strong>
          </span>
      @endif
      <button type="submit" class="btn btn-primary">Add Team</button>
    </form>
    @else
      {{-- Not Empty --}}
        <table>
          @foreach ($team as $team)
          <tr>
            <td>Team</td>
            <td>{{ $team->team }}</td>

          </tr>
        @endforeach
        </table>

      Dont need to
  @endif
@endsection
