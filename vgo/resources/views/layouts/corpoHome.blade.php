@extends('layouts.principal')

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

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div class="divFundo">
    <form class="form-horizontal" action = "@yield( 'novo', route('telefone.create'))" >
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

        <div class="form-group">
            <div class=" ">
                <button type="submit" class="btn btn-primary btn-md tele">Telefones Úteis</button>
            </div>
        </div>
    </form>
<div class="container-fluid">
    <div class="row">





        {{--Slides--}}
        <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/css/img/aviso3.jpg" alt="Chania" style="width:100%;">
                    <div class="carousel-caption">

                    </div>
                </div>

                <div class="item">
                    <img src="/css/img/aviso1.jpg" alt="Chicago">
                    <div class="carousel-caption">

                    </div>
                </div>

                <div class="item">
                    <img src="/css/img/aviso2.jpg" alt="New York">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>






        <!-- Lateral
    ================================================== -->


        <div class="col-md-2  espacolista">
            <div class="">
                <div class="well ">
                    <li class="nav-header"><a href="#">Líderes de Fuga e Administradores</a></li>

                    @forelse($todUsu as $usuario)
                        <ul class="nav ">
                            <li class="nav-header"><a href="#">{{$usuario-> nome}}</a></li>

                            @forelse($todTel as $telefone)
                                @if($telefone -> usuario_id == $usuario-> id)
                                    <li>{{$telefone-> tel1}}</li>
                                    <li>{{$telefone-> tel2}}</li>
                                @endif
                            @empty
                            @endforelse
                        </ul>
                    @empty

                    @endforelse
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






