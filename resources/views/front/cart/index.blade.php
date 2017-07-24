@extends('front.app')

@section('title', 'Carrito de compras')

@section('breadcrumb')
    <li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
    <li class="active">Carrito de compras</li>
@endsection

@section('content')
    <div class="row">

        <!-- main start -->
        <!-- ================ -->
        <div class="main col-md-12">

            <!-- page-title start -->
            <!-- ================ -->
            <h1 class="page-title">Shopping Cart</h1>
            <div class="separator-2"></div>
            <!-- page-title end -->

            <table class="table cart table-hover table-colored">
                <thead>
                    <tr>
                        <th>Product </th>
                        <th>Price </th>
                        <th>Remove </th>
                        <th class="amount">Total </th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp 
                    @foreach (session('cart') as $movie_id)
                        @php
                            $movie = \App\Movie::find($movie_id);
                            $total += $movie->price;
                        @endphp
                        <tr class="remove-data">
                            <td class="product">{{ $movie->title }}</td>
                            <td class="price">${{ $movie->price }}</td>
                            <td class="remove"><a class="btn btn-remove btn-sm btn-default" data-id="{{ $movie->id }}">Remove</a></td>
                            <td class="amount">${{ $movie->price }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td class="total-quantity" colspan="4">Total 8 Items</td>
                        <td class="total-amount">${{ $total }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-right">    
                <a href="shop-cart.html" class="btn btn-group btn-default">Update Cart</a>
                <a href="shop-checkout.html" class="btn btn-group btn-default">Checkout</a>
            </div>

        </div>
        <!-- main end -->

    </div>
@endsection

@section('calls-to-action')
    @include("front/components/calls-to-action/recomendaciones")
@endsection
