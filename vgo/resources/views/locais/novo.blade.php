@extends('layouts.principal')

@section('pagina', 'Cadastrar Local')

@section('novo', route('locais.create'))

@section('conteudo')



    <form class="form-horizontal col-sm-10 posForm" action = "{{route('locais.store')}}"method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">


            <div class="form-group">
                <label class="control-label col-sm-2">Nome:</label>
                <div class="col-sm-5">
                    <input class="form-control" name="nome" type="text" required></input>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" >Andar:</label>
                <div class="col-sm-5">
                    <input class="form-control" name="andar" type="text" required></input>
                </div>
            </div>

        <div class="form-group">
            <label class="control-label col-sm-2" >Prédio:</label>
            <div class="col-sm-5">
                <select class="form-control" name="predio" type= required>

                    @forelse($todPred as $linha)

                        <option value="{{$linha-> id}}">{{$linha-> nome}}</option>
                    @empty
                        <option disabled>Cadastre um Prédio</option>

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