@extends('front.app')

@section('title', 'Listado de películas')

@section('description', 'Listado de películas')

@section('breadcrumb')
    <li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
    <li class="active">Películas</li>
@endsection

@section('content')
    <div class="main col-md-8">

        <!-- page-title start -->
        <!-- ================ -->
        <h1 class="page-title">Películas - Todas</h1>
        <div class="separator-2"></div>
        <!-- page-title end -->

        <!-- blogpost start -->
        <article class="blogpost">
            <div class="row grid-space-10">
                <div class="col-md-5">
                    <div class="overlay-container">
                        <img src="content/peliculas/720x360/ghostbusters.jpg" alt="">
                        <a class="overlay-link" href="pelicula.php"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="col-md-7">
                    <header>
                        <h2><a href="pelicula.php">Ghostbusters</a></h2>
                        <div class="post-info">
                            <span class="post-date">
                                <i class="icon-calendar"></i>
                                3 de mayo de 1990
                            </span>
                            <span class="comments"><i class="icon-tag-1"></i> <a href="#"
                            >Acción</a></span>
                        </div>
                    </header>
                    <div class="blogpost-content">
                        <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut.</p>
                    </div>
                </div>
            </div>
        </article>
        <!-- blogpost end -->

        <!-- blogpost start -->
        <article class="blogpost">
            <div class="row grid-space-10">
                <div class="col-md-5">
                    <div class="overlay-container">
                        <img src="content/peliculas/720x360/jurassic-park.jpg" alt="">
                        <a class="overlay-link" href="pelicula.php"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="col-md-7">
                    <header>
                        <h2><a href="pelicula.php">Jurassic Park</a></h2>
                        <div class="post-info">
                            <span class="post-date">
                                <i class="icon-calendar"></i>
                                3 de mayo de 1990
                            </span>
                            <span class="comments"><i class="icon-tag-1"></i> <a href="#"
                            >Acción</a></span>
                        </div>
                    </header>
                    <div class="blogpost-content">
                        <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut.</p>
                    </div>
                </div>
            </div>
        </article>
        <!-- blogpost end -->

        <!-- blogpost start -->
        <article class="blogpost">
            <div class="row grid-space-10">
                <div class="col-md-5">
                    <div class="overlay-container">
                        <img src="content/peliculas/720x360/robocop.jpg" alt="">
                        <a class="overlay-link" href="pelicula.php"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="col-md-7">
                    <header>
                        <h2><a href="pelicula.php">Robocop</a></h2>
                        <div class="post-info">
                            <span class="post-date">
                                <i class="icon-calendar"></i>
                                3 de mayo de 1990
                            </span>
                            <span class="comments"><i class="icon-tag-1"></i> <a href="#"
                            >Acción</a></span>
                        </div>
                    </header>
                    <div class="blogpost-content">
                        <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut.</p>
                    </div>
                </div>
            </div>
        </article>
        <!-- blogpost end -->

        <!-- blogpost start -->
        <article class="blogpost">
            <div class="row grid-space-10">
                <div class="col-md-5">
                    <div class="overlay-container">
                        <img src="content/peliculas/720x360/tortugas-ninja.jpg" alt="">
                        <a class="overlay-link" href="pelicula.php"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="col-md-7">
                    <header>
                        <h2><a href="pelicula.php">Las Tortugas Ninja</a></h2>
                        <div class="post-info">
                            <span class="post-date">
                                <i class="icon-calendar"></i>
                                3 de mayo de 1990
                            </span>
                            <span class="comments"><i class="icon-tag-1"></i> <a href="#"
                            >Acción</a></span>
                        </div>
                    </header>
                    <div class="blogpost-content">
                        <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut.</p>
                    </div>
                </div>
            </div>
        </article>
        <!-- blogpost end -->

        <!-- blogpost start -->
        <article class="blogpost">
            <div class="row grid-space-10">
                <div class="col-md-5">
                    <div class="overlay-container">
                        <a href="#">
                            <img src="content/peliculas/720x360/batman.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <header>
                        <h2><a href="pelicula.php">Batman</a></h2>
                        <div class="post-info">
                            <span class="post-date">
                                <i class="icon-calendar"></i>
                                3 de mayo de 1990
                            </span>
                            <span class="comments"><i class="icon-tag-1"></i> <a href="#"
                            >Acción</a></span>
                        </div>
                    </header>
                    <div class="blogpost-content">
                        <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut.</p>
                    </div>
                </div>
            </div>
        </article>
        <!-- blogpost end -->

        <!-- pagination start -->
        <nav>
            <ul class="pagination">
                <li><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </nav>
        <!-- pagination end -->

    </div>
    <!-- main end -->

    <!-- sidebar start -->
    <!-- ================ -->
    <aside class="col-md-4 col-lg-3 col-lg-offset-1">
        <div class="sidebar">
            
            @include("front/aside/buscar")
            
            @include("front/aside/categorias")

            @include("front/aside/relacionados")
                                          
        </div>
    </aside>
    <!-- sidebar end -->

@endsection

@section('calls-to-action')
    @include("front/components/calls-to-action/recomendaciones")
@endsection
