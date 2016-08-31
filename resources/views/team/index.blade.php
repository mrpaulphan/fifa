@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Team</div>
                <a href="{{ route('create.player') }}" class="btn btn-primary">Add Player</a>

                <div class="panel-body">
                    <table class="table table-striped">
                      <thead class="thead-inverse">

                      <tr>
                        <td>Pos</td>
                        <td>Name</td>
                        <td>Age</td>
                        <td>Ovr</td>
                        <td>G</td>
                        <td>A</td>
                        <td>Form</td>
                        <td>Joined</td>
                        <td>Form</td>
                        <td>Contract</td>
                        <td>Nationality</td>
                        <td>Value</td>
                        <td>Wages</td>
                        <td>Actions</td>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($players as $player)
                          <tr>
                            <td>{{$player->position}}</td>
                            <td>{{$player->name}}</td>
                            <td>{{$player->age}}</td>
                            <td>{{$player->overall }}</td>
                            <td>{{$player->appearances }}</td>
                            <td>{{$player->goals }}</td>
                            <td>{{$player->assists }}</td>
                            <td>{{$player->joined }}</td>
                            <td>{{$player->form }}</td>
                            <td>{{$player->contract}}</td>
                            <td>{{$player->nationality }}</td>
                            <td>{{$player->value}}</td>
                            <td>{{$player->wages}}</td>
                            <td>
                              <form class="" action="{{route('delete.player')}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$player->id}}">
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                            </td>
                          </tr>
                        @endforeach


                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
