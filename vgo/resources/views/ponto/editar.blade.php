@extends('layouts.principal')
@extends('layouts.opcoesPag')

@section('novo', route('ponto.create'))
{{--@section('buscar',  route('ponto.show'))--}}
@section('listar',  route('ponto.index'))


<div class="divFundo">

    @section('pagina', 'Ponto de Encontro')
    @section('opcoes')


        <form class="form-horizontal posForm"  action = "{{route('ponto.update', ['id' => $dados->id ])}}"method = "post">
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
                <div class="col-sm-offset-3 col-sm-2">
                    <button type="submit" class="btn btn-primary btn-md bot-salvar">Salvar</button>
                </div>
            </div>
        </form>


        </form>


</div>


@endsection