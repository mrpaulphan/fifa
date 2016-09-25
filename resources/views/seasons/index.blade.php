@extends('layouts.layout-nav')
@section('title', 'Season')
@section('content')
<div class="content">
    @if($seasons->name == '--')
        <div class="block--modal-overlay">
          <div class="block--modal" data-block-color="default">
              <section class="season-direction--intro" data-trigger-parent="showTeam">
                  <header class="block__title">
                      <h3>Get started</h3>
                  </header>
                  <div class="block__content">
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
              </section>
              <section class="season-direction--team" data-toggle="showTeam"  data-trigger-parent="showCompetition" >
                  <header class="block__title">
                      <h3>Create a save</h3>
                  </header>
                  <div class="block__content">
                      <form class="form" action="{{ route('update.seasons', [Auth::user()->username, $seasons->belongsToSave->slug ]) }}" method="POST" data-form="postTeam">
                          {{ csrf_field() }}
                          <input type="hidden" name="save_id" value="{{ $seasons->belongsToSave->id }}">
                          <fieldset class="form__fieldset">
                              <div class="layout-split-2">
                                  <div class="column layout-split-2--aside">
                                      <div class="column form__group">
                                          <label class="form__label" for="">Team Name</label>
                                          <input type="text" name="name" value="{{ $seasons->name }}">
                                      </div>
                                      <div class="column">
                                          <div class="form__group form__group--color-picker">
                                              <label class="form__label" for="">Color</label>
                                              <div class="form__radio-label" data-trigger="colorPicker" data-block-color="default"></div>
                                              <div class="layout-split-5 form__group--color-picker-group" spacing="1" data-toggle="colorPicker">
                                              <div class="column">
                                                  <input class="form__radio" type="radio" name="color" value="navyBlue" id="navyBlue">
                                                  <label class="form__radio-label" for="navyBlue"></label>
                                              </div>

                                              <div class="column">
                                                  <input class="form__radio" type="radio" name="color" value="royalBlue" id="royalBlue">
                                                  <label class="form__radio-label" for="royalBlue"></label>
                                              </div>

                                              <div class="column">
                                                  <input class="form__radio" type="radio" name="color" value="paleBlue" id="paleBlue">
                                                  <label class="form__radio-label" for="paleBlue"></label>
                                              </div>

                                              <div class="column">
                                                  <input class="form__radio" type="radio" name="color" value="turqouise" id="turqouise">
                                                  <label class="form__radio-label" for="turqouise"></label>
                                              </div>

                                              <div class="column">
                                                  <input class="form__radio" type="radio" name="color" value="green" id="green">
                                                  <label class="form__radio-label" for="green"></label>
                                              </div>

                                              <div class="column">
                                                  <input class="form__radio" type="radio" name="color" value="darkGrey" id="darkGrey">
                                                  <label class="form__radio-label" for="darkGrey"></label>
                                              </div>

                                              <div class="column">
                                                  <input class="form__radio" type="radio" name="color" value="purple" id="purple">
                                                  <label class="form__radio-label" for="purple"></label>
                                              </div>

                                              <div class="column">
                                                  <input class="form__radio" type="radio" name="color" value="magenta" id="magenta">
                                                  <label class="form__radio-label" for="magenta"></label>
                                              </div>

                                              <div class="column">
                                                  <input class="form__radio" type="radio" name="color" value="red" id="red">
                                                  <label class="form__radio-label" for="red"></label>
                                              </div>

                                              <div class="column">
                                                  <input class="form__radio" type="radio" name="color" value="gold" id="gold">
                                                  <label class="form__radio-label" for="gold"></label>
                                              </div>
                                          </div>
                                          </div>

                                      </div>

                                  </div>
                                  <div class="column form__group">
                                      <label class="form__label" for="">Continental Objective</label>
                                      <input class="form__input" type="text" name="continental_objective" value="{{ $seasons->continental_objective }}">
                                  </div>
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
                                      <label class="form__label" for="">Domestic Objective</label>
                                      <input class="form__input" type="text" name="domestic_objective" value="{{ $seasons->domestic_objective }}">
                                  </div>
                                  <div class="column form__group">
                                      <label class="form__label" for="">Youth Objective</label>
                                      <input class="form__input" type="text" name="youth_objective" value="{{ $seasons->youth_objective }}">
                                  </div>
                                  </div>
                          </fieldset>
                          <div class="layout-split-2--apart">
                              <div class="column">
                                  <button type="button" name="button">Back</button>

                              </div>
                              <div class="column">
                                  <button type="button" name="button">Skip</button>
                                  <button type="button" name="button" data-trigger="showCompetition" data-ajax="postTeam">Nextt</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </section>
              <section class="season-direction--competition" data-toggle="showCompetition" data-trigger-parent="showPlayer">
                  <header class="block__title">
                      <h3>Create a competitions</h3>
                  </header>
                  <div class="block__content">
                      <button type="button" name="button" data-trigger="showPlayer" data-ajax="postTeam">Nextt</button>

                  </div>
              </section>
              <section class="season-direction--player" data-toggle="showPlayer">
                  <header class="block__title">
                      <h3>Create a competitions</h3>
                  </header>
                  <div class="block__content">
                      asdfs
                  </div>
              </section>
          </div>
      </div>
    @endif
    <div class="layout-split-2--wrapper" spacing="1">
          <div class="column block" data-block-color="default">
              <header class="block__title">
                <h3>Information</h3>
            </header>
                <div class="block__content" spacing=".5">
                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Team Name</div>
                        <div class="column d-gray" data-ajax-get="name">{{ $seasons->name }}</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Domestic Objective</div>
                        <div class="column d-gray" data-ajax-get="domestic_objective">{{ $seasons->domestic_objective }}</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Continental Objective</div>
                        <div class="column d-gray" data-ajax-get="continental_objective">{{ $seasons->continental_objective }}</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Brand Objective</div>
                        <div class="column d-gray" data-ajax-get="brand_objective">{{$seasons->brand_objective }}</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Financial Objective</div>
                        <div class="column d-gray" data-ajax-get="financial_objective">{{ $seasons->financial_objective }}</div>
                    </div>
                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Youth Objective</div>
                        <div class="column d-gray" data-ajax-get="youth_objective">{{ $seasons->youth_objective }}</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Club Worth</div>
                        <div class="column d-gray" data-ajax-get="club_worth">{{ $seasons->club_worth }}</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Transfer Budget</div>
                        <div class="column d-gray" data-ajax-get="transfer_budget">{{ $seasons->transfer_budget }}</div>
                    </div>



                </div>
          </div>
          <div class="column block" data-block-color="default">
              <div class="block__title">
                <h3>Overview</h3>
              </div>
                <div class="block__content layout-split-2--wrapper-gutterless">
                    <div class="column block" spacing="1">
                        <div class="trow layout-split-2--table ">
                            <div class="column ">Matches</div>
                            <div class="column text-align-right">--</div>
                        </div>
                        <div class="trow layout-split-2--table">
                            <div class="column ">Won</div>
                            <div class="column text-align-right">--</div>
                        </div>
                        <div class="trow layout-split-2--table">
                            <div class="column ">Drawn</div>
                            <div class="column text-align-right">--</div>
                        </div>
                        <div class="trow layout-split-2--table">
                            <div class="column ">Lost</div>
                            <div class="column text-align-right">--</div>
                        </div>

                    </div>
                    <div class="column block overview__chart">
                        <img class="overview__chart-img" src="assets/img/Chart_pie.png" alt="" />
                    </div>


                </div>
          </div>
    </div>

            <div class="layout-split-4" >
            <div class="column block" data-block-color="default">
                            <div class="block__title">
                              <h3>Premier League</h3>
                            </div>
                              <div class="block__content layout-split-2"spacing=".5">
                                  <div class="trow layout-split-2--table ">
                                      <div class="column ">Matches</div>
                                      <div class="column text-align-right">--</div>
                                  </div>
                                  <div class="trow layout-split-2--table">
                                      <div class="column ">Won</div>
                                      <div class="column text-align-right">--</div>
                                  </div>
                                  <div class="trow layout-split-2--table">
                                      <div class="column ">Drawn</div>
                                      <div class="column text-align-right">--</div>
                                  </div>
                                  <div class="trow layout-split-2--table">
                                      <div class="column ">Lost</div>
                                      <div class="column text-align-right">--</div>
                                  </div>
            </div>
            </div>
            <div class="column block" data-block-color="default">
                <div class="block__title">
                  <h3>FA Cup</h3>
                </div>
                  <div class="block__content layout-split-2"spacing=".5">
                      <div class="trow layout-split-2--table ">
                          <div class="column ">Matches</div>
                          <div class="column text-align-right">--</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Won</div>
                          <div class="column text-align-right">--</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Drawn</div>
                          <div class="column text-align-right">--</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Lost</div>
                          <div class="column text-align-right">--</div>
                      </div>
            </div>
            </div>
            <div class="column block" data-block-color="default">
                <div class="block__title">
                  <h3>Capital One Cup</h3>
                </div>
                  <div class="block__content layout-split-2"spacing=".5">
                      <div class="trow layout-split-2--table ">
                          <div class="column ">Matches</div>
                          <div class="column text-align-right">--</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Won</div>
                          <div class="column text-align-right">--</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Drawn</div>
                          <div class="column text-align-right">--</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Lost</div>
                          <div class="column text-align-right">--</div>
                      </div>
            </div>
            </div>
            <div class="column block" data-block-color="default">
                <div class="block__title">
                  <h3>Europa League</h3>
                </div>
                  <div class="block__content layout-split-2"spacing=".5">
                      <div class="trow layout-split-2--table ">
                          <div class="column ">Matches</div>
                          <div class="column text-align-right">--</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Won</div>
                          <div class="column text-align-right">--</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Drawn</div>
                          <div class="column text-align-right">--</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Lost</div>
                          <div class="column text-align-right">--</div>
                      </div>
            </div>
            </div>
        </div>
</div>
@endsection
