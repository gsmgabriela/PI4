@extends('layouts.principal')

@section('pagina', 'Editar Ponto de Encontro')

@section('novo', route('ponto.create'))

@section('conteudo')


    <form class="form-horizontal posFormEdit"  action = "{{route('ponto.update', ['id' => $dados->id ])}}"method = "post" enctype="multipart/form-data">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            <input type = "hidden" name = "_method" value = "PATCH">


            <div class="form-group">
                <label class="control-label col-sm-2">Nome:</label>
                <div class="col-sm-5">
                    <input class="form-control" name="nome" value="{{$dados->nome}}" type="text" required></input>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" >Descrição:</label>
                <div class="col-sm-5">
                    <input class="form-control" name="descricao" value="{{$dados->descricao}}"  type="text" required></input>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Ponto de Encontro:</label>
                <div class="col-sm-5">
                    <input class="form-control" name="ponto" value="{{$dados->img1}}" type="file" >{{$dados->img1}}</input>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-2">
                    <button type="submit" class="btn btn-primary btn-md bot-salvar">Salvar</button>
                </div>
            </div>
        </form>
    <center><p class="oPredio"><img  width="380" height="300" src="/{{ $dados -> img1 }}"name="pontoVelho"></img></p></center>
        @endsection



