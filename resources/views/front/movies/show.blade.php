@extends('front.app')

@section('title', $movie->title)

@section('description', $movie->title)

@section('breadcrumb')
    <li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
    <li><a href="/peliculas">Películas</a></li>
    <li class="active">{{$movie->title}}</li>
@endsection

@section('banner')
    <div class="image-cover" style="background-image: url('{{$movie->banner}}');"></div>
@endsection

@section('content')
    <!-- main start -->
    <!-- ================ -->
    <div class="main col-md-8">

        <!-- page-title start -->
        <!-- ================ -->
        <h1 class="page-title">{{$movie->title}}</h1>
        <div class="separator-2"></div>
        <!-- page-title end -->

        <div class="embed-responsive embed-responsive-16by9">
            <img class="img-responsive" src="{{$movie->banner}}">
        </div>

        <div class="light-gray-bg p-20 bordered clearfix">
            <span class="product price"><i class="icon-tag pr-10"></i>${{$movie->price}}</span>
            <div class="product elements-list pull-right clearfix">
                @php $disabled = (in_array($movie->id, session('cart'))) ? 'disabled' : ''; @endphp
                <a id="addToCart" data-id="{{$movie->id}}" href="/agregar-al-carrito" class="margin-clear btn btn-default" {{ $disabled }}><span class="fa fa-spin fa-spinner" style="display: none"></span> Agregar al carrito</a>
            </div>
        </div>

    </div>
    <!-- main end -->

    <!-- sidebar start -->
    <!-- ================ -->
    <aside class="col-md-4 col-lg-3 col-lg-offset-1">
        <div class="sidebar">
            
            @include("front/aside/buscar")
            
            @include("front/aside/relacionados")
                                          
        </div>
    </aside>
    <!-- sidebar end -->

@endsection

@section('calls-to-action')
    @include("front/components/calls-to-action/recomendaciones")
@endsection

@section('scripts')
<script>
    var sending = false;
    $('#addToCart').on('click', function (e) {
        e.preventDefault();
        var $this = $(this),
            movie_id = $this.data('id');
        $this.find('.fa-spin').show();
        if (!sending) {
            sending = true;
            $.ajax({
                url: '/cart/add',
                type: 'post',
                data: {movie_id: movie_id},
                success: function () {
                    sending = false;
                    $this.attr('disabled', true);
                    $this.find('.fa-spin').hide();
                    $('#announcement h4').html('La película se agregó con éxito.');
                    $('#announcement').fadeIn();
                }
            });
        }
    });
</script>
@endsection
