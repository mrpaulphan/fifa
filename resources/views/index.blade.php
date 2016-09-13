@extends('layouts.default')

@section('content')
  @if($team->isEmpty())
    {{-- Empty --}}

    Please create a team
    <form class="" role="form" method="POST" action="{{ route('post.team') }}" spacing="1">
      {{ csrf_field() }}
      <label for="">Team</label>
      <input type="text" name="team"  value="{{ old('username') }}">
      @if ($errors->has('team'))
          <span class="help-block">
              <strong>{{ $errors->first('team') }}</strong>
          </span>
      @endif
      <label for="">Body optional</label>
        <textarea name="body" rows="8" cols="40"></textarea>
        @if ($errors->has('body'))
            <span class="help-block">
                <strong>{{ $errors->first('body') }}</strong>
            </span>
        @endif
      <label for="">Worth</label>
      <input type="number" name="worth"  value="{{ old('username') }}">
      @if ($errors->has('worth'))
          <span class="help-block">
              <strong>{{ $errors->first('worth') }}</strong>
          </span>
      @endif
      <label for="">Budget</label>
      <input type="number" name="budget"  value="{{ old('username') }}">
      @if ($errors->has('budget'))
          <span class="help-block">
              <strong>{{ $errors->first('budget') }}</strong>
          </span>
      @endif
      <label for="">Win</label>
      <input type="number" name="win"  value="{{ old('username') }}">
      @if ($errors->has('win'))
          <span class="help-block">
              <strong>{{ $errors->first('win') }}</strong>
          </span>
      @endif      <label for="">Loss</label>
      <input type="number" name="loss"  value="{{ old('username') }}">
      @if ($errors->has('loss'))
          <span class="help-block">
              <strong>{{ $errors->first('loss') }}</strong>
          </span>
      @endif
      <label for="">Season</label>
      <input type="text" name="season"  value="{{ old('username') }}">
      @if ($errors->has('season'))
          <span class="help-block">
              <strong>{{ $errors->first('season') }}</strong>
          </span>
      @endif
      <button type="submit" class="btn btn-primary">Add Team</button>
    </form>
    @else
      {{-- Not Empty --}}



      <div class="layout-split-2--wrapper" spacing="1">
          <div class="column block">
              <div class="block__title">
                <h3>Information</h3>
              </div>
                <div class="block__content" spacing=".5">

                      <!-- @foreach ($team as $team) @endforeach -->
                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Team Name</div>
                        <div class="column d-gray">Manchester United</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Domestic Objective</div>
                        <div class="column d-gray">Get a promotion</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Continental Objective</div>
                        <div class="column d-gray">Qualify for UCL</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Brand Objective</div>
                        <div class="column d-gray">Spread to Asia</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Finanvial Objective</div>
                        <div class="column d-gray">Earn more money from Transfers</div>
                    </div>
                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Youth Objective</div>
                        <div class="column d-gray">Promote 3 youth players from the</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Club Worth</div>
                        <div class="column d-gray">$80,000,000</div>
                    </div>

                    <div class="trow layout-split-2--table">
                        <div class="column l-gray text-align-right">Transfer Budget</div>
                        <div class="column d-gray">$15,000,000</div>
                    </div>









                </div>
          </div>
          <div class="column block">
              <div class="block__title">
                <h3>Overview</h3>
              </div>
                <div class="block__content layout-split-2--wrapper-gutterless">
                    <div class="column block" spacing="1">
                        <div class="trow layout-split-2--table ">
                            <div class="column ">Matches</div>
                            <div class="column text-align-right">40</div>
                        </div>
                        <div class="trow layout-split-2--table">
                            <div class="column ">Won</div>
                            <div class="column text-align-right">20</div>
                        </div>
                        <div class="trow layout-split-2--table">
                            <div class="column ">Drawn</div>
                            <div class="column text-align-right">10</div>
                        </div>
                        <div class="trow layout-split-2--table">
                            <div class="column ">Lost</div>
                            <div class="column text-align-right">10</div>
                        </div>

                    </div>
                    <div class="column block overview__chart">
                        <img class="overview__chart-img" src="assets/img/Chart_pie.png" alt="" />
                    </div>


                </div>
          </div>

</div>

            <div class="layout-split-4" >
            <div class="column block">
                            <div class="block__title">
                              <h3>Premier League</h3>
                            </div>
                              <div class="block__content layout-split-2"spacing=".5">
                                  <div class="trow layout-split-2--table ">
                                      <div class="column ">Matches</div>
                                      <div class="column text-align-right">40</div>
                                  </div>
                                  <div class="trow layout-split-2--table">
                                      <div class="column ">Won</div>
                                      <div class="column text-align-right">20</div>
                                  </div>
                                  <div class="trow layout-split-2--table">
                                      <div class="column ">Drawn</div>
                                      <div class="column text-align-right">10</div>
                                  </div>
                                  <div class="trow layout-split-2--table">
                                      <div class="column ">Lost</div>
                                      <div class="column text-align-right">10</div>
                                  </div>
            </div>
            </div>
            <div class="column block">
                <div class="block__title">
                  <h3>FA Cup</h3>
                </div>
                  <div class="block__content layout-split-2"spacing=".5">
                      <div class="trow layout-split-2--table ">
                          <div class="column ">Matches</div>
                          <div class="column text-align-right">40</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Won</div>
                          <div class="column text-align-right">20</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Drawn</div>
                          <div class="column text-align-right">10</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Lost</div>
                          <div class="column text-align-right">10</div>
                      </div>
            </div>
            </div>
            <div class="column block">
                <div class="block__title">
                  <h3>Capital One Cup</h3>
                </div>
                  <div class="block__content layout-split-2"spacing=".5">
                      <div class="trow layout-split-2--table ">
                          <div class="column ">Matches</div>
                          <div class="column text-align-right">40</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Won</div>
                          <div class="column text-align-right">20</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Drawn</div>
                          <div class="column text-align-right">10</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Lost</div>
                          <div class="column text-align-right">10</div>
                      </div>
            </div>
            </div>
            <div class="column block">
                <div class="block__title">
                  <h3>Europa League</h3>
                </div>
                  <div class="block__content layout-split-2"spacing=".5">
                      <div class="trow layout-split-2--table ">
                          <div class="column ">Matches</div>
                          <div class="column text-align-right">40</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Won</div>
                          <div class="column text-align-right">20</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Drawn</div>
                          <div class="column text-align-right">10</div>
                      </div>
                      <div class="trow layout-split-2--table">
                          <div class="column ">Lost</div>
                          <div class="column text-align-right">10</div>
                      </div>
            </div>
            </div>


        </div>

  @endif
@endsection
