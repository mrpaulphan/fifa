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
                    <form class="" action="{{ route('post.saves', [Auth::user()->username ]) }}" method="post">
                        {{ csrf_field() }}

                            <label for="">Save Name</label>
                            <input type="text" name="saveName" value="" required="required">

                            <label for="">Manager Name</label>
                            <input type="text" name="saveManager" value="" required="required">

                            <!-- <label for="">Team Name</label>
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
                             -->
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
            <form class="" action="{{ route('post.saves', [Auth::user()->username ]) }}" method="post">
                {{ csrf_field() }}

                    <label for="">Save Name</label>
                    <input type="text" name="saveName" value="" required="required">

                    <label for="">Manager Name</label>
                    <input type="text" name="saveManager" value="" required="required">

                <!--     <label for="">Team Name</label>
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
                 -->
                <button type="submit" name="button">Save</button>

            </form>
        </div>
    </div>
    <div class="layout-split-3" spacing="2">
        @foreach($saves as $save)
            <div class="column block border-top {{ $save->save_color }}">
                <div class="layout-split-full">
                    <div class="column">
                        <h2>{{ $save->save_name }} <span data-toggle="edit-{{ $save->id }}">edit</span></h2>
                        <p>{{ $save->save_manager_name }}</p>
                        <p>{{ $save->save_team_name }}</p>
                    </div>
                </div>
                <div class="layout-split-2">
                    <div class="column">
                        <p>Teams 0</p>
                        <p>Seasons 0</p>
                        <p>Trophies 0</p>
                    </div>
                    <div class="column">
                        <p><a href="{{ route('show.seasons', [Auth::user()->username, $save->slug ]) }}">open</a></p>
                    </div>
                </div>

                <div class="block--modal-overlay hide block-{{ $save->save_color}}" data-target="edit-{{ $save->id }}">
                    <div class="block--modal">
                        <header class="block__title">
                            <h3>Edit Save</h3>
                        </header>
                        <form method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <input type="hidden" name="id" value="{{ $save->id }}">


                                <label for="">Save Name</label>
                                <input type="text" name="saveName" value="{{ $save->save_name }}" required="required">

                                <label for="">Manager Name</label>
                                <input type="text" name="saveManager" value="{{ $save->save_manager_name }}" required="required">

                                <!-- <label for="">Team Name</label>
                                <input type="text" name="teamName" value="{{ $save->save_team_name }}" required="required">

                                <label for="">Color</label>
                                <input type="radio" name="saveColor" value="navyBlue" {{ $save->save_color == 'navyBlue' ? ' checked="checked"' : false }}>
                                <input type="radio" name="saveColor" value="royalBlue" {{ $save->save_color == 'royalBlue' ? ' checked="checked"' : false }}>
                                <input type="radio" name="saveColor" value="paleBlue" {{ $save->save_color == 'paleBlue' ? ' checked="checked"' : false }}>
                                <input type="radio" name="saveColor" value="turqouise" {{ $save->save_color == 'turqouise' ? ' checked="checked"' : false }}>
                                <input type="radio" name="saveColor" value="green" {{ $save->save_color == 'green' ? ' checked="checked"' : false }}>
                                <input type="radio" name="saveColor" value="darkGrey" {{ $save->save_color == 'darkGrey' ? ' checked="checked"' : false }}>
                                <input type="radio" name="saveColor" value="purple" {{ $save->save_color == 'purple' ? ' checked="checked"' : false }}>
                                <input type="radio" name="saveColor" value="magenta" {{ $save->save_color == 'magenta' ? ' checked="checked"' : false }}>
                                <input type="radio" name="saveColor" value="red" {{ $save->save_color == 'red' ? ' checked="checked"' : false }}>
                                <input type="radio" name="saveColor" value="gold" {{ $save->save_color == 'gold' ? ' checked="checked"' : false }}>
                                 -->
                            <button type="submit" name="button" formaction="{{ route('update.saves', [Auth::user()->username ]) }}">Save</button>

                        </form>
                        <form class="" action="index.html" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="id" value="{{ $save->id }}">
                            <button type="submit" name="button" formaction="{{ route('delete.saves', [Auth::user()->username ]) }}">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
</div>
@endsection
