@extends('layouts.layout')
@section('title', 'Season')
@section('class-main', '')
@section('content')
<div class="block--modal-overlay">
    <div class="block--modal" data-block-color="{{ $seasons->color}}">
        <header class="block__title">
            <h2>Create a season</h2>
        </header>
        <!-- Getting Started -->
            <div class="block__content hide" data-toggle="showTeam">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <div class="layout-split-2--apart">
                    <div class="column">
                    </div>
                    <div class="column">
                        <button type="button" name="button" data-trigger="showTeam">Next</button>
                    </div>
                </div>
            </div>
        <!-- Overview -->
            <div class="block__content">
                <form class="form" action="{{ route('update.seasons', [Auth::user()->username, $seasons->belongsToSave->slug ]) }}" method="POST" data-form="postTeam" spacing="1">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" name="save_id" value="{{ $seasons->belongsToSave->id }}">
                    <input type="hidden" name="slug" value="{{ $seasons->belongsToSave->slug }}">
                        <h3>General</h3>
                        <div class="form__row">
                            <div class="form__group">
                                <label class="form__label" for="">Team Name</label>
                                <input type="text" name="name" value="">
                            </div>
                            <div class="form__group form__group--color-picker">
                                <label class="form__label" for="">Color</label>
                                <div class="form__radio-label" data-trigger="colorPicker" data-block-color="{{ $seasons->color}}"></div>
                                <div class="form__group--color-picker-group" spacing="0" data-toggle="colorPicker">
                                    <div class="form__group--color-picker__row">
                                        <div class="form__group--color-picker__block">
                                            <input class="form__radio" type="radio" name="color" value="navyBlue" id="navyBlue">
                                            <label class="form__radio-label" for="navyBlue"></label>
                                        </div>
                                        <div class="form__group--color-picker__block">
                                            <input class="form__radio" type="radio" name="color" value="royalBlue" id="royalBlue">
                                            <label class="form__radio-label" for="royalBlue"></label>
                                        </div>

                                        <div class="form__group--color-picker__block">
                                            <input class="form__radio" type="radio" name="color" value="paleBlue" id="paleBlue">
                                            <label class="form__radio-label" for="paleBlue"></label>
                                        </div>

                                        <div class="form__group--color-picker__block">
                                            <input class="form__radio" type="radio" name="color" value="turqouise" id="turqouise">
                                            <label class="form__radio-label" for="turqouise"></label>
                                        </div>

                                        <div class="form__group--color-picker__block">
                                            <input class="form__radio" type="radio" name="color" value="green" id="green">
                                            <label class="form__radio-label" for="green"></label>
                                        </div>
                                    </div>
                                    <div class="form__group--color-picker__row">


                                        <div class="form__group--color-picker__block">
                                            <input class="form__radio" type="radio" name="color" value="darkGrey" id="darkGrey">
                                            <label class="form__radio-label" for="darkGrey"></label>
                                        </div>

                                        <div class="form__group--color-picker__block">
                                            <input class="form__radio" type="radio" name="color" value="purple" id="purple">
                                            <label class="form__radio-label" for="purple"></label>
                                        </div>

                                        <div class="form__group--color-picker__block">
                                            <input class="form__radio" type="radio" name="color" value="magenta" id="magenta">
                                            <label class="form__radio-label" for="magenta"></label>
                                        </div>

                                        <div class="form__group--color-picker__block">
                                            <input class="form__radio" type="radio" name="color" value="red" id="red">
                                            <label class="form__radio-label" for="red"></label>
                                        </div>

                                        <div class="form__group--color-picker__block">
                                            <input class="form__radio" type="radio" name="color" value="gold" id="gold">
                                            <label class="form__radio-label" for="gold"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form__group">
                                <label class="form__label" for="">Manager Popularity</label>
                                <input type="number" name="manager_popularity" value="">
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
                                <input class="form__input" type="number" name="club_worth" value="">
                            </div>
                            <div class="column form__group">
                                <label class="form__label" for="">Transfer Budget</label>
                                <input class="form__input" type="number" name="transfer_budget" value="">
                            </div>
                            <div class="column form__group">
                                <label class="form__label" for="">Earnings</label>
                                <input class="form__input" type="number" name="earnings" value="">
                            </div>
                            <div class="column form__group">
                                <label class="form__label" for="">Expenses</label>
                                <input class="form__input" type="number" name="expenses" value="">
                            </div>

                        </div>
                        <div class="layout-split-2--apart">
                            <div class="column">
                                <button type="button" name="button">Back</button>
                            </div>
                            <div class="column">
                                <button type="button" name="button">Skip</button>
                                <button type="button" name="button" data-ajax="postTeam">Nextt</button>
                            </div>
                        </div>
                </form>
            </div>
            <!-- Competitions -->
            <div class="block__content hide">
                <form class="form" action="{{ route('update.seasons', [Auth::user()->username, $seasons->belongsToSave->slug ]) }}" method="POST" data-form="postTeam" spacing="1">
                    {{ csrf_field() }}
                    <h3>Competition</h3>
                    <table>
                        <thead>
                            <tr>
                                <td class="small">Compeition Name</td>
                                <td class="small">Result</td>
                                <td class="small">Played</td>
                                <td class="small">Won</td>
                                <td class="small">Tied</td>
                                <td class="small">Lost</td>
                                <td class="small">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="" data-row>
                                <td class=""><input type="text" name="row[0][name]" value=""></td>
                                <td class=""><input type="text" name="row[0][result]" value=""></td>
                                <td class=""><input type="text" name="row[0][played]" value=""></td>
                                <td class=""><input type="text" name="row[0][won]" value=""></td>
                                <td class=""><input type="text" name="row[0][tied]" value=""></td>
                                <td class=""><input type="text" name="row[0][lost]" value=""></td>
                            </tr>
                        </tbody>
                    </table>
                    <p><a href="#" data-row-add>Add more Compeititon</a></p>

                </form>

            </div>
            <!-- Squad -->



                            <div class="column form__group">
                                <label class="form__label" for="">Club Worth (number)</label>
                                <input class="form__input" type="number" name="club_worth" value="{{ $seasons->club_worth }}">
                            </div>
                            <div class="column form__group">
                                <label class="form__label" for="">Brand Objective</label>
                                <input class="form__input" type="text" name="brand_objective" value="{{ $seasons->brand_objective }}">
                            </div>
                            <div class="column form__group">
                                <label class="form__label" for="">Transfer Budget (number)</label>
                                <input class="form__input" type="number" name="transfer_budget" value="{{ $seasons->transfer_budget }}">
                            </div>
                            <div class="column form__group">
                                <label class="form__label" for="">Financial Objective</label>
                                <input class="form__input" type="text" name="financial_objective" value="{{ $seasons->financial_objective }}">
                            </div>

                            <div class="column form__group">
                                <label class="form__label" for="">Youth Objective</label>
                                <input class="form__input" type="text" name="youth_objective" value="{{ $seasons->youth_objective }}">
                            </div>
                            </div>
                    </fieldset>

                </form>
            </div>
        </section>

    </div>
</div>
<div class="layout-split-2--dashboard">
    <div class="sidebar column" data-block-color="{{ $seasons->color}}">
        <header class="sidebar__header">
            <h1>Road to Glory</h1>
            <h2>Jeff Matthews</h2>
        </header>
        <nav class="sidebar__nav">
            <a href="#" class="sidebar__nav-link">Overview</a>
            <a href="#" class="sidebar__nav-link">Squad</a>
            <a href="#" class="sidebar__nav-link">Transfer</a>
            <a href="#" class="sidebar__nav-link">Youth</a>
            <a href="#" class="sidebar__nav-link">Career</a>
        </nav>
    </div>
    <div class="main column">
        <header class="main__header">
            <div class="layout-split-2--apart-center">
                <div class="column">
                    <h3>Team Name</h3>
                </div>
                <div class="column">
                    <select class="select" name="seasons">
                        <option value="2016">2016/2017</option>
                        <option value="2017">2017/2018</option>
                        <option value="2018">2018/2019</option>
                        <option value="2019">2019/2020</option>
                    </select>
                </div>
            </div>
        </header>
        <div class="main__body">
            <div class="season-stats">
                <div class="column season-stats">
                    <canvas id="seasonChart" class="season-stats__chart"></canvas>
                    <div class="">
                        <h4>46</h4>
                        <p>Played</p>
                    </div>
                    <div class="">
                        <h4>31</h4>
                        <p>Won</p>
                    </div>
                    <div class="">
                        <h4>3</h4>
                        <p>Tied</p>
                    </div>
                    <div class="">
                        <h4>12</h4>
                        <p>Lost</p>
                    </div>
                </div>
                <div class="column">
                    <div class="">
                        <h4>80</h4>
                        <p class="season-competition__row">Manager Popularity</p>
                    </div>
                </div>
                <div class="column">
                    <h3>Objectives</h3>
                    <p><span>1</span> Domestic</p>
                    <p><span>1</span> Continental</p>
                    <p><span>1</span> Brand</p>
                    <p><span>4</span> Financial</p>
                    <p><span>3</span> Youth</p>
                </div>
            </div>
            <div class="season-competition layout-split-5">
                <div class="column season-competition__block">
                    <header>Competition</header>
                    <p class="season-competition__row">Matches<span>8</span></p>
                    <p class="season-competition__row">Won<span>7</span></p>
                    <p class="season-competition__row">Drawn<span>1</span></p>
                    <p class="season-competition__row">Lost<span>0</span></p>
                    <p>3rd</p>
                </div>
                <div class="column season-competition__block">
                    <header>Competition</header>
                    <p class="season-competition__row">Matches<span>8</span></p>
                    <p class="season-competition__row">Won<span>7</span></p>
                    <p class="season-competition__row">Drawn<span>1</span></p>
                    <p class="season-competition__row">Lost<span>0</span></p>
                    <p>3rd</p>
                </div>
                <div class="column season-competition__block">
                    <header>Competition</header>
                    <p class="season-competition__row">Matches<span>8</span></p>
                    <p class="season-competition__row">Won<span>7</span></p>
                    <p class="season-competition__row">Drawn<span>1</span></p>
                    <p class="season-competition__row">Lost<span>0</span></p>
                    <p>3rd</p>
                </div>
                <div class="column season-competition__block">
                    <header>Competition</header>
                    <p class="season-competition__row">Matches<span>8</span></p>
                    <p class="season-competition__row">Won<span>7</span></p>
                    <p class="season-competition__row">Drawn<span>1</span></p>
                    <p class="season-competition__row">Lost<span>0</span></p>
                    <p>3rd</p>
                </div>
                <div class="column season-competition__block">
                    <header>Competition</header>
                    <p class="season-competition__row">Matches<span>8</span></p>
                    <p class="season-competition__row">Won<span>7</span></p>
                    <p class="season-competition__row">Drawn<span>1</span></p>
                    <p class="season-competition__row">Lost<span>0</span></p>
                    <p>3rd</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
