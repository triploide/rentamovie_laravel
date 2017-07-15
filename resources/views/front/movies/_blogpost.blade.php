<!-- blogpost start -->
<article class="blogpost">
    <div class="row grid-space-10">
        <div class="col-md-5">
            <div class="overlay-container">
                <img src="{{$movie->banner}}?{{$movie->id}}" alt="">
                <a class="overlay-link" href="pelicula/{{$movie->id}}"><i class="fa fa-link"></i></a>
            </div>
        </div>
        <div class="col-md-7">
            <header>
                <h2><a href="pelicula/{{$movie->slug}}">{{$movie->title}}</a></h2>
                <div class="post-info">
                    <span class="post-date">
                        <i class="icon-calendar"></i>
                        {{$movie->release_date->formatLocalized('%A %d de %B de %Y')}}
                    </span>
                    <span class="comments"><i class="icon-tag-1"></i> <a href="#"
                    >{{$movie->genre->name}}</a></span>
                </div>
            </header>
            <div class="blogpost-content">
                <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut.</p>
            </div>
        </div>
    </div>
</article>
<!-- blogpost end -->