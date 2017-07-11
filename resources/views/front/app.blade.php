<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>@yield('title') - Rentamovvie</title>
        <meta name="description" content="@yield('description', 'Mirá todas las películas y series desde la comodidad de tu casa. Rent a movie, compartiendo momentos.')">
        @include("front.partials.head")
        @yield('head')
    </head>
    
    <body class="no-trans front-page">

        <!-- scrollToTop -->
        <!-- ================ -->
        <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
        
        <!-- page wrapper start -->
        <!-- ================ -->
        <div class="page-wrapper">
        
            @include("front/partials/header")
            
            <!-- breadcrumb start -->
            <!-- ================ -->
            <div class="breadcrumb-container">
                <div class="container">
                    <ol class="breadcrumb">
                        @yield('breadcrumb')
                    </ol>
                </div>
            </div>
            <!-- breadcrumb end -->
        
            <!-- main-container start -->
            <!-- ================ -->
            <section class="main-container">
                @yield('banner')
                <div class="container">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </section>
            <!-- main-container end -->

            @yield('calls-to-action')
            
            @include("front/partials/footer")
            
        </div>
        <!-- page-wrapper end -->

        @include("front/partials/scripts")

        @yield('scripts')

    </body>
</html>
