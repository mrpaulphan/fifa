@extends('layouts.layout')
@section('title', 'Saves')
@section('content')
<div class="page-gutterless">
        @if($saves->isEmpty())
            Looks like you dont have any saves set up yet.
            <p><a href="#" class="button" data-toggle="create-team">Create Save</a></p>

            <div class="block--modal-overlay hide" data-target="create-team">
                <div class="block--modal">
                    <header class="block__title">
                        <h3>Create a save</h3>
                    </header>
                    <form class="" action="{{ route('post.saves')}}" method="post">
                        {{ csrf_field() }}

                        <fieldset>
                            <label for="">Save Name</label>
                            <input type="text" name="saveName" value="" required="required">

                            <label for="">Save Manager</label>
                            <input type="text" name="saveManager" value="" required="required">

                            <label for="">Team Name</label>
                            <input type="text" name="teamName" value="" required="required">

                            <label for="">Color</label>
                            <input type="radio" name="saveColor" value="navyBlue" checked="checked">
                            <input type="radio" name="saveColor" value="royalBlue">
                            <input type="radio" name="saveColor" value="paleBlue">
                            <input type="radio" name="saveColor" value="turqouise">
                            <input type="radio" name="saveColor" value="green">
                            <input type="radio" name="saveColor" value="darkGrey">
                            <input type="radio" name="saveColor" value="purple">
                            <input type="radio" name="saveColor" value="magenta">
                            <input type="radio" name="saveColor" value="red">
                            <input type="radio" name="saveColor" value="gold">
                        </fieldset>
                        <button type="submit" name="button">Save</button>

                    </form>
                </div>
            </div>
@else
    <p><a href="#" class="button button--secondary" data-toggle="create-team">Create Save</a></p>

    <div class="block--modal-overlay hide" data-target="create-team">
        <div class="block--modal">
            <header class="block__title">
                <h3>Create a save</h3>
            </header>
            <form class="" action="{{ route('post.saves', [Auth::user()->username, 'username' ]) }}" method="post">
                {{ csrf_field() }}

                <fieldset>
                    <label for="">Save Name</label>
                    <input type="text" name="saveName" value="" required="required">

                    <label for="">Save Manager</label>
                    <input type="text" name="saveManager" value="" required="required">

                    <label for="">Team Name</label>
                    <input type="text" name="teamName" value="" required="required">

                    <label for="">Color</label>
                    <input type="radio" name="saveColor" value="navyBlue" checked="checked">
                    <input type="radio" name="saveColor" value="royalBlue">
                    <input type="radio" name="saveColor" value="paleBlue">
                    <input type="radio" name="saveColor" value="turqouise">
                    <input type="radio" name="saveColor" value="green">
                    <input type="radio" name="saveColor" value="darkGrey">
                    <input type="radio" name="saveColor" value="purple">
                    <input type="radio" name="saveColor" value="magenta">
                    <input type="radio" name="saveColor" value="red">
                    <input type="radio" name="saveColor" value="gold">
                </fieldset>
                <button type="submit" name="button">Save</button>

            </form>
        </div>
    </div>
    <div class="layout-split-3">
        @foreach($saves as $save)
            <div class="column block border-top {{ $save->save_color }}">
                <div class="layout-split-full">
                    <div class="column">
                        <h2>{{ $save->save_name }} <span><a href="">edit</a></span></h2>
                        <p>{{ $save->save_manager_name }}</p>
                        <p>{{ $save->save_team_name }}</p>
                    </div>
                </div>
                <div class="layout-split-2">
                    <div class="column">
                        <p>Teams 1</p>
                        <p>Seasons 1</p>
                        <p>Trophies 0</p>
                    </div>
                    <div class="column">
                        <p><a href="{{ route('show.seasons') }}">open</a></p>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
@endif
</div>
@endsection
