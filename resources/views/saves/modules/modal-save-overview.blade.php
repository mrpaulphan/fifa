<!-- Overview -->
<div class="block__content hide" data-toggle-target="showTeam showCompetition">
    <form class="form" action="{{ route('update.seasons', [Auth::user()->username, $seasons->belongsToSave->slug ]) }}" method="POST" data-form="postTeam" spacing="1">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <input type="hidden" name="save_id" value="{{ $seasons->belongsToSave->id }}">
        <input type="hidden" name="slug" value="{{ $seasons->belongsToSave->slug }}">
        <input type="hidden" name="season" value="{{ $seasons->belongsToSave->slug }}">
            <h3>General</h3>
            <div class="form__row">
                <div class="form__group">
                    <label class="form__label" for="">Team Name</label>
                    <input type="text" name="name" value="" data-input="team_name">
                </div>
                <div class="form__group form__group--color-picker">
                    <label class="form__label" for="">Color</label>
                    <div class="form__radio-label" data-toggle-trigger="colorPicker" data-block-color="{{ $seasons->color}}"></div>
                    <div class="form__group--color-picker-group" spacing="0" data-toggle-target="colorPicker">
                        <div class="form__group--color-picker__row">
                            <div class="form__group--color-picker__block">
                                <input class="form__radio" type="radio" name="color" {!! $seasons->color == 'navyBlue' ? 'checked="checked"' : ''  !!} value="navyBlue" id="navyBlue">
                                <label class="form__radio-label" for="navyBlue"></label>
                            </div>
                            <div class="form__group--color-picker__block">
                                <input class="form__radio" type="radio" name="color" {!! $seasons->color == 'royalBlue' ? 'checked="checked"' : ''  !!} value="royalBlue" id="royalBlue">
                                <label class="form__radio-label" for="royalBlue"></label>
                            </div>

                            <div class="form__group--color-picker__block">
                                <input class="form__radio" type="radio" name="color" {!! $seasons->color == 'paleBlue' ? 'checked="checked"' : ''  !!} value="paleBlue" id="paleBlue">
                                <label class="form__radio-label" for="paleBlue"></label>
                            </div>

                            <div class="form__group--color-picker__block">
                                <input class="form__radio" type="radio" name="color" {!! $seasons->color == 'turqouise' ? 'checked="checked"' : ''  !!} value="turqouise" id="turqouise">
                                <label class="form__radio-label" for="turqouise"></label>
                            </div>

                            <div class="form__group--color-picker__block">
                                <input class="form__radio" type="radio" name="color" {!! $seasons->color == 'green' ? 'checked="checked"' : ''  !!} value="green" id="green">
                                <label class="form__radio-label" for="green"></label>
                            </div>
                        </div>
                        <div class="form__group--color-picker__row">


                            <div class="form__group--color-picker__block">
                                <input class="form__radio" type="radio" name="color" {!! $seasons->color == 'darkGrey' ? 'checked="checked"' : ''  !!} value="darkGrey" id="darkGrey">
                                <label class="form__radio-label" for="darkGrey"></label>
                            </div>

                            <div class="form__group--color-picker__block">
                                <input class="form__radio" type="radio" name="color" {!! $seasons->color == 'purple' ? 'checked="checked"' : ''  !!} value="purple" id="purple">
                                <label class="form__radio-label" for="purple"></label>
                            </div>

                            <div class="form__group--color-picker__block">
                                <input class="form__radio" type="radio" name="color" {!! $seasons->color == 'magenta' ? 'checked="checked"' : ''  !!} value="magenta" id="magenta">
                                <label class="form__radio-label" for="magenta"></label>
                            </div>

                            <div class="form__group--color-picker__block">
                                <input class="form__radio" type="radio" name="color" {!! $seasons->color == 'red' ? 'checked="checked"' : ''  !!} value="red" id="red">
                                <label class="form__radio-label" for="red"></label>
                            </div>

                            <div class="form__group--color-picker__block">
                                <input class="form__radio" type="radio" name="color" {!! $seasons->color == 'gold' ? 'checked="checked"' : ''  !!} value="gold" id="gold">
                                <label class="form__radio-label" for="gold"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <label class="form__label" for="">Manager Popularity</label>
                    <input type="number" name="manager_popularity" value="0" data-input="manager_popularity">
                </div>
            </div>
            <h3>Objective</h3>
            <div class="form__row">
                <div class="form__group">
                    <label class="form__label" for="">Continental</label>
                    <select class="form__input form__dropdown" name="continental_objective">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form__group">
                    <label class="form__label" for="">Domestic</label>
                    <select class="form__input form__dropdown" name="domestic_objective">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form__group">
                    <label class="form__label" for="">Brand</label>
                    <select class="form__input form__dropdown" name="brand_objective">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form__group">
                    <label class="form__label" for="">Financial</label>
                    <select class="form__input form__dropdown" name="financial_objective">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form__group">
                    <label class="form__label" for="">Youth</label>
                    <select class="form__input form__dropdown" name="youth_objective">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <h3>Financial</h3>
            <div class="form__row">
                <div class="column form__group">
                    <label class="form__label" for="">Club Worth</label>
                    <input class="form__input" type="number" name="club_worth" value="0">
                </div>
                <div class="column form__group">
                    <label class="form__label" for="">Transfer Budget</label>
                    <input class="form__input" type="number" name="transfer_budget" value="0">
                </div>
                <div class="column form__group">
                    <label class="form__label" for="">Earnings</label>
                    <input class="form__input" type="number" name="earnings" value="0">
                </div>
                <div class="column form__group">
                    <label class="form__label" for="">Expenses</label>
                    <input class="form__input" type="number" name="expenses" value="0">
                </div>

            </div>
            <div class="layout-split-2--apart">
                <div class="column">
                    <button type="button" name="button" data-toggle-trigger="showTeam">Back</button>
                </div>
                <div class="column">
                    <button type="button" name="button" data-toggle-trigger="showCompetition">Skip</button>
                    <button type="button" name="button" data-toggle-trigger="showCompetition">Next</button>
                </div>
            </div>
    </form>
</div>
