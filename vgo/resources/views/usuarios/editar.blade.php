@extends('layouts.principal')

@section('pagina', 'Editar Usuário')

@section('novo', route('usu.create'))

@section('conteudo')


    <form class="form-horizontal posFormEdit"  action = "{{route('usu.update', ['id' => $usuario-> id])}}"method = "post" enctype="multipart/form-data">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        <input type = "hidden" name = "_method" value = "PATCH">


        <div class="form-group">
            <label class="control-label col-sm-2">Nome:</label>
            <div class="col-sm-4">
                <input class="form-control" name="nome" value="{{$usuario->nome}}" type="text" required></input>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2">CPF:</label>
            <div class="col-sm-2">
                <input class="form-control" name="cpf" value="{{$usuario->cpf}}" type="text" required></input>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" >Tipo de Usuário:</label>
            <div class="col-sm-2">
                <select class="form-control" name="tipo" type= required>
                    @forelse($todTipo as $tipo)
                        @if($tipo -> id ==$usuario->tipo_usuario_id)
                            <option value="{{$tipo-> id}}" id="local" selected>{{$tipo-> tipo}}</option>
                        @else
                            <option value="{{ $tipo -> id }}" id="tipo">{{ $tipo -> tipo }}</option>
                        @endif
                    @empty
                        <option disabled>Não há Tipos de Usuário Cadastrados</option>
                    @endforelse
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" >Usuário:</label>
            <div class="col-sm-2">
                <input class="form-control" name="usuario" value="{{$usuario->usuario}}" type="text" required></input>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" >Senha:</label>
            <div class="col-sm-2">
                <input class="form-control" name="senha" value="{{$usuario->senha}}"  type="password" required></input>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-2">
                <button type="submit" class="btn btn-primary btn-md bot-salvar">Salvar</button>
            </div>
        </div>
    </form>
@endsection
