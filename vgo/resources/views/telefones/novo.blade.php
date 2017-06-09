@extends('layouts.principal')

@section('pagina', 'Adicionar Telefone')

@section('novo', route('tipo_usuario.create'))

@section('conteudo')


    <form class="form-horizontal col-sm-10 posForm" action = "{{route('telefone.store')}}"method = "post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">


        <div class="form-group">
            <label class="control-label col-sm-2" >Usuário:</label>
            <div class="col-sm-3">
                <select class="form-control" name="usuario" required>

                    @forelse($todUsu as $linha)

                        <option value="{{$linha-> id}}">{{$linha-> nome}}</option>
                    @empty
                        <option disabled>Não há Usuários</option>

                    @endforelse
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2">Telefone1:</label>
            <div class="col-sm-2">
                <input class="form-control" name="tel1" type="text" required></input>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" >Telefone2:</label>
            <div class="col-sm-2">
                <input class="form-control" name="tel2" type="text" required></input>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-2">
                <button type="submit" class="btn btn-primary btn-md bot-salvar">Salvar</button>
            </div>
        </div>
    </form>

@endsection