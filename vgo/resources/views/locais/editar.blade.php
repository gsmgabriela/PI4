@extends('layouts.principal')

@section('pagina', 'Editar Local')

@section('novo', route('locais.create'))

@section('conteudo')

    <form class="form-horizontal posForm"  action = "{{route('locais.update', ['id' => $local-> id])}}"method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            <input type = "hidden" name = "_method" value = "PATCH">


            <div class="form-group">
                <label class="control-label col-sm-2">Nome:</label>
                <div class="col-sm-5">
                    <input class="form-control" name="nome" value="{{$local->nome}}" type="text" required></input>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" >Andar:</label>
                <div class="col-sm-5">
                    <input class="form-control" name="andar" value="{{$local->andar}}"  type="text" required></input>
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-2" >Prédio:</label>
                <div class="col-sm-5">
                    <select class="form-control" name="predio" type= required>
                        @forelse($todPred as $predio)
                            @if($predio -> id ==$local->predio_id)
                                <option value="{{$predio-> id}}" id="predio" selected>{{$predio-> nome}}</option>
                            @else
                                <option value="{{ $predio -> id }}" id="predio">{{ $predio -> nome }}</option>
                            @endif
                        @empty
                            <option disabled>Não há Prédios</option>
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
