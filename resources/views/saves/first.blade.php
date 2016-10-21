<div class="block--modal-overlay">
    <div class="block--modal" data-block-color="{{ $seasons->color}}">
        <header class="block__title">
            <h2>Create a season</h2>
        </header>
            @include('seasons.modules.modal-season-getting-started')
            @include('seasons.modules.modal-season-overview')
            @include('seasons.modules.modal-season-competition')
            @include('seasons.modules.modal-season-squad')
            @include('seasons.modules.modal-season-youth')
            @include('seasons.modules.modal-season-done')

    </div>
</div>
