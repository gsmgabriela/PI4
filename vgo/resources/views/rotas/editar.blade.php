@extends('layouts.principal')
@extends('layouts.opcoesPag')

@section('novo', route('rotas.create'))
{{--@section('buscar',  route('ponto.show'))--}}
@section('listar',  route('rotas.index'))


<div class="divFundo">

    @section('pagina', 'Editar Rotas')
    @section('opcoes')

        <form class="form-horizontal posForm"  action = "{{route('rotas.update', ['id' => $rota-> id])}}"method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            <input type = "hidden" name = "_method" value = "PATCH">


            <div class="form-group">
                <label class="control-label col-sm-2">Nome:</label>
                <div class="col-sm-5">
                    <input class="form-control" name="nome" value="{{$rota->nome}}" type="text" required></input>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" >Local de Fulga:</label>
                <div class="col-sm-5">
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
                <div class="col-sm-5">
                    <input class="form-control" name="descricao" value="{{$rota->descricao}}"  type="text" required></input>
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-2" >Mapa Rota:</label>
                <div class="col-sm-5">
                    <input class="form-control" name="img1" value="{{$rota->img1}}"  type="file">{{$rota->img1}}</input>

                    <input class="form-control" name="img2" value="{{$rota->img2}}" type="file">{{$rota->img2}}</input>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-2">
                    <button type="submit" class="btn btn-primary btn-md bot-salvar">Salvar</button>
                </div>
            </div>
        </form>


</div>

@endsection
