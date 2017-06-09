@extends('layouts.principal')

@section('pagina', 'Cadastrar Usuário')



@section('conteudo')



    <form class="form-horizontal col-sm-10 posForm" action = "{{route('usu.store')}}"method = "post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">


        <div class="form-group">
            <label class="control-label col-sm-2">Nome:</label>
            <div class="col-sm-5">
                <input class="form-control" name="nome" type="text" required></input>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" >CPF:</label>
            <div class="col-sm-3">
                <input class="form-control" name="cpf" type="text" required></input>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" >Tipo De Usuário:</label>
            <div class="col-sm-3">
                <select class="form-control" name="tipo" required>

                    @forelse($todTipo as $linha)

                        <option value="{{$linha-> id}}">{{$linha-> tipo}}</option>
                    @empty
                        <option disabled>Não há Tipos de Usuários Cadastrados</option>

                    @endforelse
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" >Usuário:</label>
            <div class="col-sm-2">
                <input class="form-control" name="usuario" type="text" required></input>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" >Senha:</label>
            <div class="col-sm-2">
                <input class="form-control" name="senha" type="password" required></input>
            </div>
        </div>



        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-2">
                <button type="submit" class="btn btn-primary btn-md bot-salvar">Salvar</button>
            </div>
        </div>
    </form>

@endsection