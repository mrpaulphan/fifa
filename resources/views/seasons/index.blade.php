@extends('layouts.layout-nav')
@section('title', 'Season')
@section('content')
<div class="content">
    @if($season->isEmpty())
        <div class="block--modal-overlay">
            <div class="block--modal {{$season->isEmpty() ? 'block-color--default' : 'block-color--'.$season[0]->color}}">
                <section class="season-direction" data-target="show-team-form">
                    <header class="block__title">
                        <h3>Create a save</h3>
                    </header>
                    <div class="block__content">
                        <form class="form" action="{{ route('store.team', [Auth::user()->username, $save->slug ]) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="save_id" value="{{ $save->id }}">
                            <fieldset class="form__fieldset">
                                <div class="layout-split-2">
                                    <div class="column form__group">
                                        <label class="form__label" for="">Team Name</label>
                                        <input type="text" name="name" value="">
                                    </div>
                                    <div class="column form__group">
                                        <label class="form__label" for="">Continental Objective</label>
                                        <input class="form__input" type="text" name="continental_objective" value="">
                                    </div>
                                    <div class="column form__group">
                                        <label class="form__label" for="">Club Worth (number)</label>
                                        <input class="form__input" type="number" name="club_worth" value="0">
                                    </div>
                                    <div class="column form__group">
                                        <label class="form__label" for="">Brand Objective</label>
                                        <input class="form__input" type="text" name="brand_objective" value="">
                                    </div>
                                    <div class="column form__group">
                                        <label class="form__label" for="">Transfer Budget (number)</label>
                                        <input class="form__input" type="number" name="transfer_budget" value="0">
                                    </div>
                                    <div class="column form__group">
                                        <label class="form__label" for="">Financial Objective</label>
                                        <input class="form__input" type="text" name="financial_objective" value="">
                                    </div>
                                    <div class="column form__group">
                                        <label class="form__label" for="">Domestic Objective</label>
                                        <input class="form__input" type="text" name="domestic_objective" value="">
                                    </div>
                                    <div class="column form__group">
                                        <label class="form__label" for="">Youth Objective</label>
                                        <input class="form__input" type="text" name="youth_objective" value="">
                                    </div>
                                    <div class="colum form__group">
                                        <label class="form__label" for="">Team Color</label>
                                        <div class="layout-split-5" spacing="1">
                                            <div class="column">
                                                <input class="form__radio" type="radio" name="color" value="navyBlue" id="navyBlue" checked="checked">
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
                            </fieldset>
                            <div class="">
                                <button type="button" name="button">Back</button>
                                <button type="button" name="button">Skip</button>
                                <button type="submit" name="button">Next</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    @endif
    <div class="layout-split-2--wrapper" spacing="1">
          <div class="column block {{$season->isEmpty() ? 'block-color--default' : 'block-color--'.$season[0]->color}}">
              <header class="block__title">
                <h3>Information</h3>
            </header>
                <div class="block__content" spacing=".5">
                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Team Name</div>
                        <div class="column d-gray">{{ $season->isEmpty() || $season[0]->name == '' ? '--' : $season[0]->name }}</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Domestic Objective</div>
                        <div class="column d-gray">{{ $season->isEmpty() || $season[0]->domestic_objective == '' ? '--' : $season[0]->domestic_objective }}</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Continental Objective</div>
                        <div class="column d-gray">{{ $season->isEmpty() || $season[0]->continental_objective == '' ? '--' : $season[0]->continental_objective }}</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Brand Objective</div>
                        <div class="column d-gray">{{ $season->isEmpty() || $season[0]->brand_objective == '' ? '--' : $season[0]->brand_objective }}</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Finanvial Objective</div>
                        <div class="column d-gray">{{ $season->isEmpty() || $season[0]->financial_objective == '' ? '--' : $season[0]->financial_objective }}</div>
                    </div>
                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Youth Objective</div>
                        <div class="column d-gray">{{ $season->isEmpty() || $season[0]->youth_objective == '' ? '--' : $season[0]->youth_objective }}</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Club Worth</div>
                        <div class="column d-gray">{{ $season->isEmpty() || $season[0]->club_worth == '' ? '--' : '$'.$season[0]->club_worth }}</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Transfer Budget</div>
                        <div class="column d-gray">{{ $season->isEmpty() || $season[0]->transfer_budget == '' ? '--' : $season[0]->transfer_budget }}</div>
                    </div>



                </div>
          </div>
          <div class="column block {{$season->isEmpty() ? 'block-color--default' : 'block-color--'.$season[0]->color}}">
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
            <div class="column block {{$season->isEmpty() ? 'block-color--default' : 'block-color--'.$season[0]->color}}">
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
            <div class="column block {{$season->isEmpty() ? 'block-color--default' : 'block-color--'.$season[0]->color}}">
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
            <div class="column block {{$season->isEmpty() ? 'block-color--default' : 'block-color--'.$season[0]->color}}">
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
            <div class="column block {{$season->isEmpty() ? 'block-color--default' : 'block-color--'.$season[0]->color}}">
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
