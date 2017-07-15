<!-- header-container start -->
<div class="header-container">

    <div id="announcement" class="announcement announcement-fixed bg-success">
        <div class="container">
            <div class="margin-clear alert alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="row">
                    <div class="col-sm-8">
                        <h4></h4>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    
    <!-- header start -->
    <!-- ================ --> 
    <header class="header fixed clearfix dark">
        
        <div class="container">
            <div class="row">
                <div class="col-md-3 ">
                    <!-- header-first start -->
                    <!-- ================ -->
                    <div class="header-first clearfix">

                        <!-- logo -->
                        <div id="logo" class="logo">
                            <a href="/"><img id="logo_img" src="/images/logo.png" alt="The Project"></a>
                        </div>

                        <!-- name-and-slogan -->
                        <div class="site-slogan">
                            Rent a movie - online feature    
                        </div>
                        
                    </div>
                    <!-- header-first end -->

                </div>
                <div class="col-md-9">
        
                    <!-- header-second start -->
                    <!-- ================ -->
                    <div class="header-second clearfix">
                        
                    <!-- main-navigation start -->
                    <!-- ================ -->
                    <div class="main-navigation  animated with-dropdown-buttons">

                        <!-- navbar start -->
                        <!-- ================ -->
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">

                                <!-- Toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <!-- main-menu -->
                                    <ul class="nav navbar-nav ">
                                        <li class="dropdown ">
                                            <a href="index-shop.html" class="dropdown-toggle" data-toggle="dropdown">Películas</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="peliculas.php">Más vistas</a></li>
                                                <li><a href="peliculas.php">Mejor calificadas</a></li>
                                                <li><a href="peliculas.php">Estrenos</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown ">
                                            <a href="index-shop.html" class="dropdown-toggle" data-toggle="dropdown">Series</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="series.php">Más vistas</a></li>
                                                <li><a href="series.php">Mejor calificadas</a></li>
                                                <li><a href="series.php">Estrenos</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="index-shop.html">Quienes Somos</a>
                                        </li>
                                        <li>
                                            <a href="index-shop.html">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="registro.php">Registro</a>
                                        </li>

                                    </ul>
                                    <!-- main-menu end -->
                                    <?php
                                        @include('front.partials._header-invitado')
                                        /*
                                        if (isset($_SESSION['login'])) {
                                            include '_header-usuario.php';
                                        } else {
                                            include '_header-invitado.php';
                                        }
                                        */
                                    ?>
                                </div>
                            </div>
                        </nav>
                        <!-- navbar end -->

                    </div>
                    <!-- main-navigation end -->
                    </div>
                    <!-- header-second end -->
        
                </div>
            </div>
        </div>
        
    </header>
    <!-- header end -->
</div>
<!-- header-container end -->