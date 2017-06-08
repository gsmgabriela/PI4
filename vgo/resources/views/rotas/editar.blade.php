@extends('layouts.principal')

@section('pagina', 'Editar Rotas')

@section('novo', route('rotas.create'))

@section('conteudo')


    <form class="form-horizontal posFormEdit"  action = "{{route('rotas.update', ['id' => $rota-> id])}}"method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            <input type = "hidden" name = "_method" value = "PATCH">


            <div class="form-group">
                <label class="control-label col-sm-2">Nome:</label>
                <div class="col-sm-4">
                    <input class="form-control" name="nome" value="{{$rota->nome}}" type="text" required></input>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" >Local de Fulga:</label>
                <div class="col-sm-4">
                    <select class="form-control" name="local" type= required>
                        @forelse($todLoc as $local)
                            @if($local -> id ==$rota->locais_id)
                                <option value="{{$local-> id}}" id="local" selected>{{$local-> nome}}</option>
                            @else
                                <option value="{{ $local -> id }}" id="local">{{ $local -> nome }}</option>
                            @endif
                        @empty
                            <option disabled>Não há Locais Cadastrados</option>
                        @endforelse
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" >Descrição:</label>
                <div class="col-sm-4">
                    <textarea cols="30" rows="5" class="form-control" name="descricao" value="{{$rota->descricao}}"  type="text" required>{{$rota->descricao}}</textarea>
                </div>
            </div>

        <div class="form-group">
            <label class="control-label col-sm-2" >Mapa de Fuga:</label>
                <div class="col-sm-4">
                    <input class="form-control" name="img1" value="{{$rota->img1}}"  type="file">{{$rota->img1}}</input>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-2">
                    <button type="submit" class="btn btn-primary btn-md bot-salvar">Salvar</button>
                </div>
            </div>
        </form>

    <center><p class="oMapa"><img  width="380" height="300" src="/{{ $rota -> img1 }}"name="rotaVelha"></img></p></center>
@endsection
