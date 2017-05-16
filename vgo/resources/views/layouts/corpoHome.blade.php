@extends('layouts.principal')


<div class="container-fluid">
    <div class="row">



    {{--<!-- Botão Emergência--}}
    {{--================================================== -->--}}







    {{--<!-- /.Botão Emergência -->--}}

        <div>

            <button class="emergencia">Emerência</button>



        </div>

    <!-- Carousel
================================================== -->
        <div class="col-md-4 col-md-push-1">

            <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

            <div class="carousel-inner">
                <div class="item active">
                <img src="/css/img/mapa1.png" class="img-responsive">
                <div class="container">
                <div class="carousel-caption">
                </div>
                </div>
            </div>

            <div class="item">
            <img src="/css/img/mapa1.png" class="img-responsive">
            <div class="container">
            <div class="carousel-caption">

            </div>
            </div>
            </div>

            <div class="item">
            <img src="/css/img/fundo.jpg" class="img-responsive">
            <div class="container">
            <div class="carousel-caption">

            </div>
            </div>
            </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="glyphicon glyphicon-chevron-left"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="glyphicon glyphicon-chevron-right"></i>
            </a>
            </div>
            </div>

            {{--<!-- /.carousel -->--}}


        <div class="col-md-4 col-md-push-2 espacoEntre">
            <div class="thumbnail ">
                <img alt="" src="/css/img/incendio.jpg"></img>
                <div class="caption">
                    <h3> Ultima Notificação</h3>
                    <p>
                        Incêndio, Não há o que fazer, Morreremos.
                    </p>
                    <p>
                        <a class="btn btn-primary" href="#">
                            Leia Mais!
                        </a>

                    </p>
                </div>
            </div>


        </div>
        <!--/span-->


        <div class="col-md-3 col-md-push-1 lateral">
            <div class="  affix">
                <div class="well ">
                    <ul class="nav ">
                        <li class="nav-header">Sidebar</li>
                        <li class="active"><a href="#">Link</a>
                        </li>
                        <li><a href="#">Link</a>
                        </li>
                        <li><a href="#">Link</a>
                        </li>
                        <li><a href="#">teste de nome grande</a>
                        </li>
                        <li class="nav-header">Sidebar</li>
                        <li><a href="#">Link</a>
                        </li>
                        <li><a href="#">Link</a>
                        </li>
                        <li><a href="#">Link</a>
                        </li>
                        <li><a href="#">Link</a>
                        </li>
                        <li><a href="#">Link</a>
                        </li>
                        <li><a href="#">Link</a>
                        </li>
                        <li class="nav-header">Sidebar</li>
                        <li><a href="#">Link</a>
                        </li>
                        <li><a href="#">Link</a>
                        </li>
                        <li><a href="#">Link</a>
                        </li>
                    </ul>
                </div>
                <!--/.well -->
            </div>
            <!--/sidebar-nav-fixed -->
        </div>
        <!--/span-->
    </div>
    <!--/row-->


</div>
<!--/.fluid-container-->







