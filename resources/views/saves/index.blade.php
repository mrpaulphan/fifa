@extends('layouts.layout')
@section('title', 'Saves')
@section('content')
<div class="page" spacing="1">
@if($saves->isEmpty())
    <div class="center" spacing="1" data-toggle-target="create-team">
        <p>Looks like you dont have any saves set up yet.</p>
        <p class="align-center"><a href="#" class="button--primary" data-toggle-trigger="create-team">Create a Save</a></p>
    </div>
    <!-- Modal Overlay -->
    <div class="block--modal-overlay {{ $errors->has('name') ? '' : 'hide' }}" data-toggle-target="create-team" data-block-color="default">
        <!-- Modal Block -->
        <div class="block block-color--default block--modal">
            <!-- Modal Header-->
            <header class="block__title">
                <h3>Create a save</h3>
            </header>
            <!-- Modal Content-->
            <div class="block__content">
                <form class="" action="{{ route('post.saves', [Auth::user()->username ]) }}" method="post" spacing="1">
                        <div class="" spacing=".5">
                            <div class="form__group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="form__label" for="">Save Name</label>
                                <input class="form__input" type="text" name="name" value="" required="required">
                                @if ($errors->has('name'))
                                    <span class="block-help">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form__group">
                                <label class="form__label" for="">Manager Name</label>
                                <input class="form__input" type="text" name="manager" value="" required="required">
                            </div>
                        </div>

                        <div class="layout-split-2--apart">
                            <div class="column">
                                <button class="button--cancel" type="button" name="button" data-toggle-trigger="create-team">Back</button>
                            </div>
                            <div class="column">
                                <button class="button--primary" type="submit" name="button">Save</button>
                            </div>
                        </div>
                        {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>

@else
    <p spacing-top="1"><a href="#" class="button--secondary" data-toggle-trigger="create-team">Add Save</a></p>
    <!-- Modal Create Overlay -->
    <div class="block--modal-overlay {{ $errors->has('name') ? '' : 'hide' }}" data-toggle-target="create-team" data-block-color="default">
        <!-- Modal Create Block -->
        <div class="block block-color--default block--modal">
            <!-- Modal Create Header-->
            <header class="block__title">
                <h3>Create a save</h3>
            </header>
            <!-- Modal Create Content-->
            <div class="block__content">
                <form class="" action="{{ route('post.saves', [Auth::user()->username ]) }}" method="post" spacing="1">
                        <div class="" spacing=".5">
                            <div class="form__group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="form__label" for="">Save Name</label>
                                <input class="form__input" type="text" name="name" value="" required="required">
                                @if ($errors->has('name'))
                                    <span class="block-help">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form__group">
                                <label class="form__label" for="">Manager Name</label>
                                <input class="form__input" type="text" name="manager" value="" required="required">
                                @if ($errors->has('manager'))
                                    <span class="block-help">
                                        {{ $errors->first('manager') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="layout-split-2--apart">
                            <div class="column">
                                <button class="button--cancel" type="button" name="button" data-toggle-trigger="create-team">Back</button>
                            </div>
                            <div class="column">
                                <button class="button--primary" type="submit" name="button">Save</button>
                            </div>
                        </div>
                        {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
    <!-- Saves -->
    <div class="layout-split-4" spacing="2">
        @foreach($saves as $save)
            <!-- Save: "{{ $save->name }}"-->
            <div class="column border-top block " data-block-color="{{ $save->hasSeason() ? $save->recentSeason->first()->color : 'default' }}">
                <div class="block__content">
                    <h2>{{ $save->name }}
                        <div class="block__action">
                            <span class="block__actions-edit" data-toggle-trigger="edit-{{ $save->id }}"><?php echo file_get_contents('assets/svgs/edit.svg'); ?></span>
                            <span class="block__actions-delete" data-toggle-trigger="delete-{{ $save->id }}"><?php echo file_get_contents('assets/svgs/delete.svg'); ?></span>
                        </div>
                    </h2>
                    <p>{{ $save->manager }}</p>
                    <p>{{ $save->hasSeason() ? $save->recentSeason->first()->name : '--' }}</p>

                    <!-- Save Content"-->
                    <div class="layout-split-2">
                    <div class="column">
                        <div class="layout-split-2--apart">
                            <div class="column">
                                <p>Teams</p>
                            </div>
                            <div class="column">
                                <p>{{ $save->hasSeason() ? count($save->seasons) : '--' }}</p>
                            </div>
                        </div>
                        <div class="layout-split-2--apart">
                            <div class="column">
                                <p>Seasons</p>
                            </div>
                            <div class="column">
                                <p>{{ $save->hasSeason() ? count($save->seasons) : '--' }}</p>
                            </div>
                        </div>
                        <div class="layout-split-2--apart">
                            <div class="column">
                                <p>Trophies</p>
                            </div>
                            <div class="column">
                                <p>--</p>
                            </div>
                        </div>

                    </div>
                    <div class="layout-split-2--apart">
                        <div class="column">
                        </div>
                        <div class="column">
                            <p><a class="button--primary" href="{{ route('show.seasons', [Auth::user()->username, $save->slug ]) }}">Open</a></p>
                        </div>
                    </div>
                </div>
                </div>
                <!-- Modal Edit Overlay -->
                <div class="block--modal-overlay hide" data-toggle-target="edit-{{ $save->id }}">
                    <!-- Modal Edit -->
                    <div class="block block--modal " data-block-color="{{ $save->hasSeason() ? $save->recentSeason->first()->color : 'default' }}">
                        <!-- Modal Edit Header -->
                        <header class="block__title">
                            <h3>Edit Save</h3>
                        </header>
                        <!-- Modal Edit Content -->
                        <div class="block__content" spacing="1">
                            <form id="updateSave" method="POST" spacing=".5">
                                <input type="hidden" name="id" value="{{ $save->id }}">
                                <div class="form__group" {{ $errors->has('name') ? ' has-error' : '' }}>
                                    <label class="form__label" for="">Save Name</label>
                                    <input class="form__input" type="text" name="name" value="{{ $save->name }}" required="required">
                                    @if ($errors->has('name'))
                                        <span class="block-help">
                                            {{ $errors->first('name') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form__group" {{ $errors->has('manager') ? ' has-error' : '' }}>
                                    <label class="form__label" for="">Manager Name</label>
                                    <input class="form__input" type="text" name="manager" value="{{ $save->manager }}" required="required">
                                    @if ($errors->has('manager'))
                                        <span class="block-help">
                                            {{ $errors->first('manager') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="layout-split-2--apart">
                                    <div class="column">
                                        <button class="button--cancel" type="button" name="button" data-toggle-trigger="edit-{{ $save->id }}">Back</button>
                                    </div>
                                    <div class="column">
                                        <button class="button--primary" type="submit"  name="button" formaction="{{ route('update.saves', [Auth::user()->username ]) }}">Update</button>
                                    </div>
                                </div>
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                            </form>
                        </div>

                    </div>
                </div>
                <!-- Modal Delete -->
                <div class="block--modal-overlay hide" data-toggle-target="delete-{{ $save->id }} cancel-{{ $save->id }}">
                    <div class="block block--modal " data-block-color="{{ $save->hasSeason() ? $save->recentSeason->first()->color : 'default' }}">
                        <header class="block__title">
                            <h3>Delete Save</h3>
                        </header>
                        <div class="block__content">
                            <p>Are you sure you want to delete Save: "{{ $save->name }}"?</p>
                            <form id="deleteSave" class="" action="index.html" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="hidden" name="id" value="{{ $save->id }}">
                                <div class="layout-split-2--apart">
                                    <div class="column">
                                        <p><a href="#" class="button--cancel" data-toggle-trigger="cancel-{{ $save->id }}">Cancel</a></p>
                                    </div>
                                    <div class="column">
                                    <button class="button--primary" type="submit" name="button" formaction="{{ route('delete.saves', [Auth::user()->username ]) }}">Delete</button>
                            </div>
                                </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    @endforeach
    </div>
@endif
</div>
@endsection
