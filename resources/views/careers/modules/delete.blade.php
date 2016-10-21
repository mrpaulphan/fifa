<!-- Modal Delete -->
<div class="block--modal-overlay hide" data-toggle-target="delete-{{ $career->id }} cancel-{{ $career->id }}">
    <div class="block block--modal " data-block-color="{{ $career->hasSave() ? $career->recentSeason->first()->color : 'default' }}">
        <header class="block__title">
            <h3>Delete Save</h3>
        </header>

        <div class="block__content">
            <p>Are you sure you want to delete Save: "{{ $career->name }}"?</p>
            <form id="deleteSave" class="" action="{{ route('delete.career')}}" method="POST">
                <input type="hidden" name="id" value="{{ $career->id }}">

                <div class="layout-split-2--apart">
                    <div class="column">
                        <p><a href="#" class="button--cancel" data-toggle-trigger="cancel-{{ $career->id }}">Cancel</a></p>
                    </div>

                    <div class="column">
                        <button class="button--primary" type="submit" name="button">Delete</button>
                    </div>
                </div>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
            </form>
        </div>
    </div>
</div>
