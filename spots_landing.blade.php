@extends('layouts.master')
@section('title', 'Spots')

@section('content')

<header id="diving-spots">
    <img class="" src="assets/resources/images/liveaboard-1.jpg" alt="">
</header>

<section id="about-diving-spots">
    <div class="container">
        <h1>{!! helper_content(3, 'Title') !!}</h1>
    </div>
</section>

        <section class="container">
            <header class="pad-bottom white"><h1>{!! helper_content(3, 'Title') !!}</h1></header>
        </section>

        <section class="container box-darkgray">
 
            <ul class="unbulleted col-flex">
                @foreach($areas as $area)
                <li class="col-4 pad-bottom pad-top-small">
                    <h3 class="sec-header-ib">{{ $area->title }}</h3>
                    <ul class="fontid_02 unbulleted">
                        @foreach($subareas as $subarea)
                            @if( $subarea->area_id == $area->id)
                            <li class="spot-link"><a href="{{ url('/spots/'.$subarea->name) }}">{{ $subarea->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>

        </section>

        <div class="footer">
            <div class="container">
                <small>&copy; Copyright 2017 RED SEA ONE</small>
            </div>
        </div>
    </main>
@endsection