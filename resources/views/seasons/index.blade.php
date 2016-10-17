@extends('layouts.layout')
@section('title', 'Season')
@section('class-main', '')
@section('content')
    @if ($seasons->activated === 0 )
        @include('seasons.first')
    @endif

<div class="layout-split-2--dashboard">
    @include('layouts.sidebar-nav')
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
