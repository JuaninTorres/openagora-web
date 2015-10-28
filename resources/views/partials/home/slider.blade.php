<div id="slider-home" class="carousel slide" data-ride="carousel" data-interval="3000">
    {{-- Indicators --}}
    <ol class="carousel-indicators">
        <li data-target="#slider-home" data-slide-to="0" class="active"></li>
        <li data-target="#slider-home" data-slide-to="1"></li>
        <li data-target="#slider-home" data-slide-to="2"></li>
        <li data-target="#slider-home" data-slide-to="3"></li>
        <li data-target="#slider-home" data-slide-to="4"></li>
        <li data-target="#slider-home" data-slide-to="5"></li>
    </ol>

    {{-- Wrapper for slides --}}
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="{{ asset('images/slides/slide01.jpg') }}" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('images/slides/slide02.jpg') }}" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('images/slides/slide03.jpg') }}" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('images/slides/slide04.jpg') }}" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('images/slides/slide05.jpg') }}" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('images/slides/slide06.jpg') }}" alt="">
        </div>
    </div>

    {{-- Controls --}}
    <a class="left carousel-control" href="#slider-home" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previo</span>
    </a>
    <a class="right carousel-control" href="#slider-home" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>