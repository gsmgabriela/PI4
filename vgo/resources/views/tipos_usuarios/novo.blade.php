@extends('layouts.principal')

@section('pagina', 'Cadastrar Tipo de Usuário')

@section('novo', route('tipo_usuario.create'))

@section('conteudo')



    <form class="form-horizontal col-sm-10 posForm" action = "{{route('tipo_usuario.store')}}"method = "post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">


        <div class="form-group">
            <label class="control-label col-sm-2">Tipo:</label>
            <div class="col-sm-3">
                <input class="form-control" name="tipo" type="text" required></input>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" >Descrição:</label>
            <div class="col-sm-4">
                <input class="form-control" name="descricao" type="text" required></input>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-2">
                <button type="submit" class="btn btn-primary btn-md bot-salvar">Salvar</button>
            </div>
        </div>
    </form>

@endsection