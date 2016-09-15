@extends('layouts.default')
@section('title', 'Saves')


@section('content')
        {{-- No Teams --}}

        Please create team
        <p><a href="#" class="button" data-toggle="create-team">Create Save</a></p>

        <div class="block--modal-overlay hide" data-target="create-team">
            <div class="block--modal">
                <header class="block__title">
                    <h3>Create a save</h3>
                </header>


            </div>
        </div>
        
      {{-- Has Teams --}}
@endsection
