<?php include 'layouts/head.php'; ?>

<?php include 'layouts/main_menu.php'; ?>

<header id="diving-spots">
    <img class="" src="assets/resources/images/liveaboard-1.jpg" alt="">
</header>

<section id="about-diving-spots">
    <div class="container">
        <ul class="nav nav-fill">
            @foreach($areas as $area)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $area->title }}</a>
                    <div class="dropdown-menu" aria-labeledby="navbarDropdown">    
                        @foreach($subareas as $subarea)
                            @if( $subarea->area_id == $area->id)
                                    @if( $subarea->title == $spot->title)
                                    <a href="{{ url('/spots/'.$subarea->name) }}" class="active dropdown-item">{{ $subarea->title }}</a>
                                    @else
                                    <a href="{{ url('/spots/'.$subarea->name) }}" class="dropdown-item">{{ $subarea->title }}</a>
                                    @endif
                            @endif
                        @endforeach
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>

        <section class="container col-flex">

            <div class="col-3 pad-right-sp">
                <div class="box-darkgray">
                    <header class="sec-header">
                        <h2>{{ $spot->title }}</h2>
                    </header>
                    <img src="{!! helper_content(4, $spot->name.'-main') !!}" />
                    <div class="letter-space-1">{!! $spot->intro !!}</div>
                </div>
            </div>
            <div class="col-6">
                
                <div class="rhs-slick">
                    <div class="slick-item" style="background-image: url('{!! helper_content(4, $spot->name.'-1') !!}');" />
                    </div>
                    <div class="slick-item" style="background-image: url('{!! helper_content(4, $spot->name.'-2') !!}');" />
                    </div>
                    <div class="slick-item" style="background-image: url('{!! helper_content(4, $spot->name.'-3') !!}');" />
                    </div>
                </div>
                
            </div>

        </section>

        <section class="container">

            <div class="box-darkgray letter-space-1">{!! $spot->description !!}</div>

        </section>

        <div class="flex-grow">
        </div>
        
    </main>

    <?php include 'layouts/footer.php'; ?>