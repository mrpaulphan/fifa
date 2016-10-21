@extends('layouts.layout')
@section('title', 'Squad')
@section('class-main', '')
@section('content')
<div class="block--modal-overlay">
    <div class="block--modal" data-block-color="default">
        <header class="block__title">
            <h2>Create a save</h2>
        </header>
            @include('saves.modules.modal-save-getting-started')
            @include('saves.modules.modal-save-overview')
            @include('saves.modules.modal-save-competition')
            @include('saves.modules.modal-save-squad')
            @include('saves.modules.modal-save-youth')
            @include('saves.modules.modal-save-done')

    </div>
</div>
@endsection
