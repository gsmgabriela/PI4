@extends('layouts.principal')

@section('pagina', 'Cadastrar Rotas')

@section('novo', route('rotas.create'))

@section('conteudo')



    <form class="form-horizontal col-sm-10 posForm" action = "{{route('rotas.store')}}"method = "post" enctype="multipart/form-data">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">


            <div class="form-group">
                <label class="control-label col-sm-2">Nome:</label>
                <div class="col-sm-5">
                    <input class="form-control" name="nome" type="text" required></input>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" >Descrição:</label>
                <div class="col-sm-5">
                    <textarea cols="30" rows="5" class="form-control" name="descricao" type="text" required></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" >Mapa Rota:</label>
                <div class="col-sm-5">
                    <input class="form-control" name="img1" type="file" required></input>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" >Local de Fulga:</label>
                <div class="col-sm-5">
                    <select class="form-control" name="local" required>

                        @forelse($todLoc as $linha)

                            <option value="{{$linha-> id}}">{{$linha-> nome}}</option>
                        @empty
                            <option disabled>Não há Locais</option>

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