@extends('layouts.layout')
@section('title', 'Squad')
@section('class-main', '')
@section('content')


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

        </div>
    </div>
</div>

@endsection
