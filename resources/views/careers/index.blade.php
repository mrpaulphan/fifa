@extends('layouts.layout')
@section('title', 'Careers')
@section('content')
<div class="page" spacing="1">
@if($careers->isEmpty())
    <div class="center" spacing="1" data-toggle-target="create-career">
        <p>Looks like you dont have any saves set up yet.</p>
        <p class="align-center"><a href="#" class="button--primary" data-toggle-trigger="create-career">Create a Career</a></p>
    </div>
    @include('careers.modules.create')
@else
    <p spacing-top="1"><a href="#" class="button--secondary" data-toggle-trigger="create-career">Add Career</a></p>
    @include('careers.modules.create')

    <!-- Careers -->
    <div class="layout-split-4" spacing="2">
        @foreach($careers as $career)
            <!-- Save: "{{ $career->name }}"-->
            <div class="column border-top block " data-block-color="{{ $career->hasSave() ? $career->recentSave->first()->color : 'default' }}">
                <div class="block__content">
                    <h2>{{ $career->name }}
                        <div class="block__action">
                            <span class="block__actions-edit" data-toggle-trigger="edit-{{ $career->id }}"><?php echo file_get_contents('assets/svgs/edit.svg'); ?></span>
                            <span class="block__actions-delete" data-toggle-trigger="delete-{{ $career->id }}"><?php echo file_get_contents('assets/svgs/delete.svg'); ?></span>
                        </div>
                    </h2>
                    <p>{{ $career->manager }}</p>
                    <p>{{ $career->hasSave() ? $career->recentSave->first()->name : '--' }}</p>

                    <!-- Career Content"-->
                    <div class="layout-split-2">
                    <div class="column">
                        <div class="layout-split-2--apart">
                            <div class="column">
                                <p>Teams</p>
                            </div>
                            <div class="column">
                                <p>{{ $career->hasSave() ? count($career->seasons) : '--' }}</p>
                            </div>
                        </div>
                        <div class="layout-split-2--apart">
                            <div class="column">
                                <p>Saves</p>
                            </div>
                            <div class="column">
                                <p>{{ $career->hasSave() ? count($career->seasons) : '--' }}</p>
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
                            <p><a class="button--primary" href="{{ route('create.save')}}">Open</a></p>
                        </div>
                    </div>
                </div>
                </div>
                @include('careers.modules.edit')
                @include('careers.modules.delete')
            </div>
        @endforeach
    </div>
@endif
</div>
@endsection
