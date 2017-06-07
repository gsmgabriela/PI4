@extends('layouts.principal')

<div class="divFundo">
<div class="container-fluid">
    <div class="row">
    <!-- Carousel
================================================== -->

        <div class="box">
            <!--

            AQUI ESTÁ A APRESESNTAÇÃO DE IMAGENS (BEM VINDO)

            -->

            <div>
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <div class="posicao_slide_superior" style="visibility: hidden">
                        <ol>
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                    </div>

                    <!-- Wrapper for slides -->

                    <div class="carousel-inner">

                        <div class="item active">
                            <img class="img_superior img-full " src="" alt="">
                        </div>
                        <div class="item">
                            <img class="img_superior img-full " src="" alt="">
                        </div>
                        <div class="item">
                            <img class="img_superior img-full " src="" alt="">
                        </div>

                    </div>


                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>

            </div>
        </div>


        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>


        <!--FIM DA APRESESNTAÇÃO DE IMAGENS (BEM VINDO) -->

        <!--



                <!-- Fim Carousel
            ================================================== -->





        <!-- Lateral
    ================================================== -->


        <div class="col-md-2  espacolista">
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
</div>






