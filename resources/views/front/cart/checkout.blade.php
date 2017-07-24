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
            <h1 class="page-title">Comprar</h1>
            <div class="separator-2"></div>
            <!-- page-title end -->

            <table class="table cart">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th class="amount">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="product"><a href="shop-product.html">Product Title 1</a> <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</small></td>
                        <td class="price">$99.50 </td>
                        <td class="quantity">
                            <div class="form-group">
                                <input type="text" class="form-control" value="2" disabled="">
                            </div>                                          
                        </td>
                        <td class="amount">$199.00 </td>
                    </tr>
                    <tr>
                        <td class="product"><a href="shop-product.html">Product Title 2</a> <small>Quas inventore modi</small></td>
                        <td class="price"> $99.66 </td>
                        <td class="quantity">
                            <div class="form-group">
                                <input type="text" class="form-control" value="3" disabled="">
                            </div>                                          
                        </td>
                        <td class="amount">$299.00 </td>
                    </tr>
                    <tr>
                        <td class="product"><a href="shop-product.html">Product Title 3</a> <small>Fugiat nemo enim officiis repellendus</small></td>
                        <td class="price"> $499.66 </td>
                        <td class="quantity">
                            <div class="form-group">
                                <input type="text" class="form-control" value="3" disabled="">
                            </div>                                          
                        </td>
                        <td class="amount">$1499.00 </td>
                    </tr>
                    <tr>
                        <td class="total-quantity" colspan="3">Total 8 Items</td>
                        <td class="total-amount">$1597.00</td>
                    </tr>
                </tbody>
            </table>
            <fieldset>
                <legend>Billing information</legend>
                <form role="form" class="form-horizontal" id="billing-information">
                    <div class="row">
                        <div class="col-lg-3">
                            <h3 class="title">Personal Info</h3>
                        </div>
                        <div class="col-lg-8 col-lg-offset-1">
                            <div class="form-group">
                                <label for="billingFirstName" class="col-md-2 control-label">Nombre<small class="text-default">*</small></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="billingFirstName" placeholder="Nombre" name="first_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="billingLastName" class="col-md-2 control-label">Apellido<small class="text-default">*</small></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="billingLastName" placeholder="Apellido" name="last_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="billingemail" class="col-md-2 control-label">Email<small class="text-default">*</small></label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control" id="billingemail" placeholder="Email" name="email">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </fieldset>
            <div class="space-bottom"></div>
            <div class="text-right">    
                <a href="carrito-de-compras" class="btn btn-group btn-default"><i class="icon-left-open-big"></i> Volver al carrito</a>
                <a href="/comprar/paso-2" class="btn btn-group btn-default"><i class="icon-check"> Comprar</i></a>
            </div>

        </div>
        <!-- main end -->

    </div>
    </div>
@endsection

@section('calls-to-action')
    @include("front/components/calls-to-action/recomendaciones")
@endsection
