@extends('layouts.base', ['titre'=>'About'])

@section('contenu')
<div class="container">
    <div class="mt-4">
        <h3>What is LaraCarte ?</h3>
        <p>LaraCarte is a clone app of <a href="http://larapmap.com">LaraMap</a>.</p>

        <div class="alert alert-warning col-sm-6" role="alert">
            This app has been built by <a href="http://twitter.com">@maximeAmini</a> for learning purpases.
        </div>
        Feel free to help to improve the <a href="#">source code</a>.
    </div>
    <hr>
    <div class="mt-4">
        <h3>What is LaraMap ?</h3>
        <p>
            LaraMap is the web site by witch LaraCate was inspiered.
            <br>
            More info<a href="http://larapmap.com">here</a>
        </p>
    </div>
    <hr>
    <div class="mt-4">
        <h3>Which tools and services are usend in LaraCarte ?</h3>
        <p>Basicaly it's buils in laravel & bootstrap. But there's a bunch of services used for email and other actions.
        </p>
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>googleMap</li>
        </ul>
    </div>

    @endsection
