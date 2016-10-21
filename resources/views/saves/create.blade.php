@extends('layouts.layout')
@section('title', 'Save')
@section('class-main', '')
@section('content')
<div class="layout-split-2--dashboard ">
    <aside class="column sidebar" data-block-color="default">
        <header class="sidebar__header">
            <h2>Career name</h2>
            <h3>Career Manager</h3>
        </header>
        <nav class="sidebar__nav">
            <a href="#" class="sidebar__nav-link">Overview</a>
            <a href="#" class="sidebar__nav-link">Squad</a>
            <a href="#" class="sidebar__nav-link">Youth</a>
            <a href="#" class="sidebar__nav-link">Career</a>
        </nav>
    </aside>
    <main class="column overview main">
        <!-- Main Header -->
        <section class="main__header">
            <!-- Main Header Title -->
            <h1 class="main__title">Save Name</h1>
            <!-- Main Header Dropdown -->
            <div class="main__date">
                <span class="main__date-dropdown" data-toggle-trigger="overiewDate">May 2016 <input type="hidden" name="save_date" value=""></span>
                <div class="layout-split-2 hide" data-toggle-target="overiewDate">
                    <div class="column">
                        <ul>
                            <li>2015/2016</li>
                            <li>2016/2017</li>
                            <li>2017/2018</li>
                            <li>2018/2019</li>
                        </ul>
                    </div>
                    <div class="column">
                        <ul>
                            <li>Sept 2015</li>
                            <li>October 2015</li>
                            <li>November 2015</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Save Overview -->
        <section>
            <div class="layout-split-3--overview">
                <!-- Chart -->
                <div class="column">
                    <div class="layout-split-5--overview">
                        <div class="column">
                            <canvas id="overview-data"></canvas>
                        </div>
                        <div class="column">
                            <span class="overview__number" data-overview-played="46">46</span>
                            <p class="header-type--small">Played</p>
                        </div>
                        <div class="column">
                            <span class="overview__number" data-overview-won="31">31</span>
                            <p class="header-type--small">Won</p>
                        </div>
                        <div class="column">
                            <span class="overview__number" data-overview-tied="3">3</span>
                            <p class="header-type--small">Tied</p>
                        </div>
                        <div class="column">
                            <span class="overview__number" data-overview-lost="12">12</span>
                            <p class="header-type--small">Lost</p>
                        </div>
                    </div>
                </div>
                <!-- Popularity -->
                <div class="column">
                    <span class="overview__number">80</span>
                    <p class="header-type--small">Manager Popularity</p>
                </div>
                <!-- Objectives -->
                <div class="column">
                    <h2 class="header-type">Objectives</h2>
                    <ul class="overview__objective-list">
                        <li class="overview__objective-item"><span class="circle">1</span> <span class="overview__objective-name">Domestic</span></li>
                        <li class="overview__objective-item"><span class="circle">1</span> <span class="overview__objective-name">Contentieal</span></li>
                        <li class="overview__objective-item"><span class="circle">1</span> <span class="overview__objective-name">Brand</span></li>
                        <li class="overview__objective-item"><span class="circle">4</span> <span class="overview__objective-name">Financial</span></li>
                        <li class="overview__objective-item"><span class="circle">3</span> <span class="overview__objective-name">Youth</span></li>
                    </ul>

                </div>
            </div>

        </section>
        <!-- Competitions -->
        <section class="overview__competition">
            <div class="layout-split-5">
                <div class="column competition">
                    <header class="competition__header">
                        <h2 class="competition__title">Championship</h2>
                        <span class="competition__icon">Icon</span>
                    </header>
                    <div class="competition__body">
                        <p class="competition__data"><span class="competition__label header-type--small">Matches</span> <span class="competition__value">36</span></p>
                        <p class="competition__data"><span class="competition__label header-type--small">Won</span> <span class="competition__value">36</span></p>
                        <p class="competition__data"><span class="competition__label header-type--small">Drawn</span> <span class="competition__value">36</span></p>
                        <p class="competition__data"><span class="competition__label header-type--small">Lost</span> <span class="competition__value">36</span></p>
                    </div>
                    <footer class="competition__total">1st</footer>
                </div>

            </div>
        </section>
        <!-- Financial -->
        <section class="overview__financial">
            <div class="">
                <div class="column">
                    <div class="">
                        <p class="header-type--small">Club Worth</p>
                        <span>+$334K</span>
                    </div>
                    <div class="">
                        <p class="header-type--small">Club Worth</p>
                        <span>+$334K</span>
                    </div>
                    <div class="">
                        <p class="header-type--small">Club Worth</p>
                        <span>+$334K</span>
                    </div>
                </div>
                <div class="column">
                    <span class="overview__number">$3Bn</span>
                    <p class="header-type--small">Club Worth</p>
                </div>
                <div class="column">
                    <span class="overview__number">$99M</span>
                    <p class="header-type--small">Tranfer budget</p>
                </div>
            </div>
        </section>
    </main>
</div>

@endsection
