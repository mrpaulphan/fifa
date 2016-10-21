<!-- Modal Edit Overlay -->
<div class="block--modal-overlay hide" data-toggle-target="edit-{{ $career->id }}">
    <!-- Modal Edit -->
    <div class="block block--modal " data-block-color="{{ $career->hasSave() ? $career->recentSeason->first()->color : 'default' }}">
        <!-- Modal Edit Header -->
        <header class="block__title">
            <h3>Edit Save</h3>
        </header>
        <!-- Modal Edit Content -->
        <div class="block__content" spacing="1">
            <form id="updateSave" action="{{ route('update.career')}}" method="POST" spacing=".5">
                <!-- Save Name Field -->
                <div class="form__group" {{ $errors->has('name') ? ' has-error' : '' }}>
                    <label class="form__label" for="">Save Name</label>
                    <input class="form__input" type="text" name="name" value="{{ $career->name }}" required="required">
                    @if ($errors->has('name'))
                    <span class="block-help">
                        {{ $errors->first('name') }}
                    </span>
                    @endif
                </div>
                <!-- Manager Field -->
                <div class="form__group" {{ $errors->has('manager') ? ' has-error' : '' }}>
                    <label class="form__label" for="">Manager Name</label>
                    <input class="form__input" type="text" name="manager" value="{{ $career->manager }}" required="required">
                    @if ($errors->has('manager'))
                    <span class="block-help">
                        {{ $errors->first('manager') }}
                    </span>
                    @endif
                </div>
                <div class="layout-split-2--apart">
                    <div class="column">
                        <button class="button--cancel" type="button" name="button" data-toggle-trigger="edit-{{ $career->id }}">Back</button>
                    </div>
                    <div class="column">
                        <button class="button--primary" type="submit"  name="button">Update</button>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $career->id }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
            </form>
        </div>
    </div>
</div>
