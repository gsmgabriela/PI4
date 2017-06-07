@extends('layouts.principal')

@section('pagina', 'Editar Prédios')

@section('novo', route('predio.create'))

@section('conteudo')


    <form class="form-horizontal col-sm-10 posForm"  action = "{{route('predio.update', ['id' => $predio-> id])}}"method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            <input type = "hidden" name = "_method" value = "PATCH">


            <div class="form-group">
                <label class="control-label col-sm-2">Nome:</label>
                <div class="col-sm-5">
                    <input class="form-control" name="nome" value="{{$predio->nome}}" type="text" required></input>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" >Descrição:</label>
                <div class="col-sm-5">
                    <input class="form-control" name="descricao" value="{{$predio->descricao}}"  type="text" required></input>
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-2" >Ponto de Encontro</label>
                <div class="col-sm-5">
                    <select class="form-control" name="ponto" type= required>
                        @forelse($todPont as $ponto)
                            @if($ponto -> id ==$predio->ponto_de_encontro_id)
                                <option value="{{$ponto-> id}}" id="ponto" selected>{{$ponto-> nome}}</option>
                            @else
                                <option value="{{ $ponto -> id }}" id="ponto">{{ $ponto -> nome }}</option>
                            @endif
                        @empty
                            <option disabled>Não há pontos de encontro para esse prédio</option>
                        @endforelse
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-2">
                    <button type="submit" class="btn btn-primary btn-md bot-salvar">Salvar</button>
                </div>
            </div>
    </form>

@endsection