<!-- Modal Overlay -->
<div class="block--modal-overlay {{ $errors->has('name') ? '' : 'hide' }}" data-toggle-target="create-career" data-block-color="default">
    <!-- Modal Block -->
    <div class="block block-color--default block--modal">
        <!-- Modal Header-->
        <header class="block__title">
            <h3>Create a career</h3>
        </header>
        <!-- Modal Content-->
        <div class="block__content">
            <form class="" action="{{ route('store.career') }}" method="post" spacing="1">
                <div class="" spacing=".5">
                    <!-- Career Name Field -->
                    <div class="form__group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="form__label" for="">Career Name</label>
                        <input class="form__input" type="text" name="name" value="" required="required">
                        @if ($errors->has('name'))
                            <span class="block-help">
                                {{ $errors->first('name') }}
                            </span>
                        @endif
                    </div>
                    <!-- Manager Name Field -->
                    <div class="form__group">
                        <label class="form__label" for="">Manager Name</label>
                        <input class="form__input" type="text" name="manager" value="" required="required">
                    </div>
                </div>

                <div class="layout-split-2--apart">
                    <div class="column">
                        <button class="button--cancel" type="button" name="button" data-toggle-trigger="create-career">Back</button>
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
