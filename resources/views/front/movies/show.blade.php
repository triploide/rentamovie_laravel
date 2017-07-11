@extends('front.app')

@section('title', 'Ghostbusters')

@section('description', 'Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et sollicitudin purus fermentum ut.')

@section('breadcrumb')
    <li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
    <li><a href="/peliculas">Películas</a></li>
    <li class="active">Ghostbusters</li>
@endsection

@section('banner')
    <div class="image-cover" style="background-image: url(content/peliculas/720x360/ghostbusters.jpg);"></div>
@endsection

@section('content')
    <!-- main start -->
    <!-- ================ -->
    <div class="main col-md-8">

        <!-- page-title start -->
        <!-- ================ -->
        <h1 class="page-title">Ghostbusters</h1>
        <div class="separator-2"></div>
        <!-- page-title end -->

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7aW8oyTgA60"></iframe>
        </div>

    </div>
    <!-- main end -->

    <!-- sidebar start -->
    <!-- ================ -->
    <aside class="col-md-4 col-lg-3 col-lg-offset-1">
        <div class="sidebar">
            
            @include("front/aside/buscar")
            
            @include("front/aside/relacionados  ")
                                          
        </div>
    </aside>
    <!-- sidebar end -->

@endsection

@section('calls-to-action')
    @include("front/components/calls-to-action/recomendaciones")
@endsection
