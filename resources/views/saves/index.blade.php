@extends('layouts.layout')
@section('title', 'Saves')
@section('content')
<div class="page-gutterless">
    @if($saves->isEmpty())
        <div spacing="1">
            <p>Looks like you dont have any saves set up yet</p>
            <p class="align-center"><a href="#" class="button--primary" data-toggle="create-team">Create Save</a></p>
        </div>

    <div class="block--modal-overlay hide" data-target="create-team">
        <div class="block block-color--default block--modal">
            <header class="block__title">
                <h3>Create a save</h3>
            </header>
            <div class="block__content">
                <form class="form" action="{{ route('post.saves', [Auth::user()->username ]) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form__group">
                        <label class="form__label"for="">Save Name</label>
                        <input class="form__input"type="text" name="saveName" value="" required="required">
                    </div>
                    <div class="form__group">
                        <label class="form__label"for="">Manager Name</label>
                        <input class="form__input"type="text" name="saveManager" value="" required="required">
                    </div>
                    <div class="layout-split-2--apart">
                        <div class="column">
                            <p><a href="#" class="button--secondary">Cancel</a></p>
                        </div>
                        <div class="column">
                            <button type="submit" name="button--primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@else
    <p><a href="#" class="button button--secondary" data-toggle="create-team">Create Save</a></p>
    <div class="block--modal-overlay hide" data-target="create-team">
        <div class="block block-color--default block--modal">
            <header class="block__title">
                <h3>Create a save</h3>
            </header>
            <div class="block__content">
                <form class="" action="{{ route('post.saves', [Auth::user()->username ]) }}" method="post">
                    {{ csrf_field() }}
                        <div class="form__group">
                            <label class="form__label" for="">Save Name</label>
                            <input class="form__input" type="text" name="saveName" value="" required="required">
                        </div>

                        <div class="form__group">
                            <label class="form__label" for="">Manager Name</label>
                            <input class="form__input" type="text" name="saveManager" value="" required="required">
                        </div>

                    <button type="submit" name="button">Save</button>

                </form>
            </div>
        </div>
    </div>
    <div class="layout-split-3" spacing="2">
        @foreach($saves as $save)
            <div class="column block {{$team->isEmpty() ? 'block-color--default' : 'block-color--'.$team[0]->team_color}} border-top">
                <div class="block__content">
                    <h2>{{ $save->name }} <span data-toggle="edit-{{ $save->id }}">edit</span></h2>
                    <p>{{ $save->manager }}</p>
                    <p>{{ $team->isEmpty() ? '' : $team[0]->team_name }}</p>
                <div class="layout-split-2">
                    <div class="column">
                        <p>Teams {{ $team->isEmpty() ? '0' : '1' }}</p>
                        <p>Seasons {{ $team->isEmpty() ? '0' : '1' }}</p>
                        <p>Trophies {{ $team->isEmpty() ? '0' : '1' }}</p>
                    </div>
                    <div class="column">
                        <p><a class="button--primary" href="{{ route('show.seasons', [Auth::user()->username, $save->slug ]) }}">open</a></p>
                    </div>
                </div>
            </div>
                {{-- Update Modal --}}
                <div class="block--modal-overlay hide" data-target="edit-{{ $save->id }}">
                    <div class="block block--modal block-color--default">
                        <header class="block__title">
                            <h3>Edit Save</h3>
                        </header>
                        <div class="block__content">
                            <form id="updateSave" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <input type="hidden" name="id" value="{{ $save->id }}">

                                <div class="form__group">
                                    <label class="form__label" for="">Save Name</label>
                                    <input class="form__input" type="text" name="name" value="{{ $save->name }}" required="required">
                                </div>

                                <div class="form__group">
                                    <label class="form__label" for="">Manager Name</label>
                                    <input class="form__input" type="text" name="manager" value="{{ $save->manager }}" required="required">
                                </div>
                                <div class="layout-split-2--apart">
                                    <div class="column">
                                    </div>
                                    <div class="column">
                                        <button class="button--primary" type="submit"  name="button" formaction="{{ route('update.saves', [Auth::user()->username ]) }}">Save</button>
                                    </div>
                                </div>

                            </form>
                            <form id="deleteSave" class="" action="index.html" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="hidden" name="id" value="{{ $save->id }}">
                                <button class="button--secondary" type="submit" name="button" formaction="{{ route('delete.saves', [Auth::user()->username ]) }}">Delete</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
</div>
@endsection
