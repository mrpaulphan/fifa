@extends('layouts.default') @section('content') @if($team->isEmpty()) {{-- Empty --}} Please create a team
<form class="" role="form" method="POST" action="{{ route('post.team') }}">
   {{ csrf_field() }}
   <label for="">Team</label>
   <input type="text" name="team" value="{{ old('username') }}"> @if ($errors->has('team'))
   <span class="help-block">
              <strong>{{ $errors->first('team') }}</strong>
          </span> @endif
   <label for="">Body optional</label>
   <textarea name="body" rows="8" cols="40"></textarea> @if ($errors->has('body'))
   <span class="help-block">
                <strong>{{ $errors->first('body') }}</strong>
            </span> @endif
   <label for="">Worth</label>
   <input type="number" name="worth" value="{{ old('username') }}"> @if ($errors->has('worth'))
   <span class="help-block">
              <strong>{{ $errors->first('worth') }}</strong>
          </span> @endif
   <label for="">Budget</label>
   <input type="number" name="budget" value="{{ old('username') }}"> @if ($errors->has('budget'))
   <span class="help-block">
              <strong>{{ $errors->first('budget') }}</strong>
          </span> @endif
   <label for="">Win</label>
   <input type="number" name="win" value="{{ old('username') }}"> @if ($errors->has('win'))
   <span class="help-block">
              <strong>{{ $errors->first('win') }}</strong>
          </span> @endif <label for="">Loss</label>
   <input type="number" name="loss" value="{{ old('username') }}"> @if ($errors->has('loss'))
   <span class="help-block">
              <strong>{{ $errors->first('loss') }}</strong>
          </span> @endif
   <label for="">Season</label>
   <input type="text" name="season" value="{{ old('username') }}"> @if ($errors->has('season'))
   <span class="help-block">
              <strong>{{ $errors->first('season') }}</strong>
          </span> @endif
   <button type="submit" class="btn btn-primary">Add Team</button>
</form>
@else {{-- Not Empty --}}
<a href="" id="edit" data-toggle="edit-team">Edit</a>



<table>
   @foreach ($team as $team)
     <div class="" data-target="edit-team">
     <form class="" action="{{ route('edit.team')}}" method="POST">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $team->id }}">
        <label for="">Team</label>
        <input type="text" name="team" value="{{ $team->team }}"> @if ($errors->has('team'))
        <span class="help-block">
                   <strong>{{ $errors->first('team') }}</strong>
               </span> @endif
               <label for="">Body optional</label>
               <textarea name="body" rows="8" cols="40" value="{{ $team->body }}"></textarea> @if ($errors->has('body'))
               <span class="help-block">
                            <strong>{{ $errors->first('body') }}</strong>
                        </span> @endif
               <label for="">Worth</label>
               <input type="number" name="worth" value="{{ $team->worth }}"> @if ($errors->has('worth'))
               <span class="help-block">
                          <strong>{{ $errors->first('worth') }}</strong>
                      </span> @endif
               <label for="">Budget</label>
               <input type="number" name="budget" value="{{ $team->budget }}"> @if ($errors->has('budget'))
               <span class="help-block">
                          <strong>{{ $errors->first('budget') }}</strong>
                      </span> @endif
               <label for="">Win</label>
               <input type="number" name="win" value="{{ $team->win }}"> @if ($errors->has('win'))
               <span class="help-block">
                          <strong>{{ $errors->first('win') }}</strong>
                      </span> @endif <label for="">Loss</label>
               <input type="number" name="loss" value="{{ $team->loss }}"> @if ($errors->has('loss'))
               <span class="help-block">
                          <strong>{{ $errors->first('loss') }}</strong>
                      </span> @endif
               <label for="">Season</label>
               <input type="text" name="season" value="{{ $team->season }}"> @if ($errors->has('season'))
               <span class="help-block">
                          <strong>{{ $errors->first('season') }}</strong>
                      </span> @endif
        <button type="submit" class="btn btn-primary">Add Team</button>

     </form>
   </div>

   <tr>
      <td>Team</td>
      <td>{{ $team->team }}</td>

   </tr>
   <tr>
      <td>Age</td>
      <td>{{ $team->age }}</td>

   </tr>
   <tr>
      <td>body</td>
      <td>{{ $team->body }}</td>

   </tr>
   <tr>
      <td>worth</td>
      <td>{{ $team->worth }}</td>

   </tr>
   <tr>
      <td>budget</td>
      <td>{{ $team->budget }}</td>

   </tr>
   <tr>
      <td>win</td>
      <td>{{ $team->win }}</td>

   </tr>
   <tr>
      <td>loss</td>
      <td>{{ $team->loss }}</td>

   </tr>
   <tr>
      <td>tie</td>
      <td>{{ $team->tie }}</td>

   </tr>
   <tr>
      <td>season</td>
      <td>{{ $team->season }}</td>
   </tr>
   @endforeach
</table>

Dont need to @endif @endsection
