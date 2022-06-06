<!-- Carousel Start -->

<div id="carousel" class="carousel slide" data-ride="carousel">
    @foreach($slider as $rs)
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">

            <img src="{{Storage::url($rs->image)}}" alt="Carousel Image">

            <div class="carousel-caption">
                <h1 class="animated fadeInLeft">{{$rs->title}}</h1>
                <p class="animated fadeInRight">{{$rs->description}}</p>
                <a class="btn animated fadeInUp" href="#">Get free consultation</a>
            </div>

        </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

    </div>

    @endforeach
</div>

<!-- Carousel End -->
