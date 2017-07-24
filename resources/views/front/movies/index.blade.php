@extends('front.app')

@section('title', 'Listado de películas')

@section('description', 'Listado de películas')

@section('head')
    <link rel="canonical" href="{{url('peliculas')}}">
@endsection

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

        {{--
            @foreach($movies as $movie)
                @include('front.movies._blogpost')
            @endforeach
        --}}

        @each('front.movies._blogpost', $movies, 'movie')

        <!-- pagination start -->
        <nav>
            {{$movies->links()}}
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
