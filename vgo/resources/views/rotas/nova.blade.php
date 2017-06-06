@extends('layouts.principal')
{{--@extends('layouts.opcoesPag')--}}


<div class="divFundo">

    @section('pagina', 'Rota')
    @section('conteudo')


        <form class="form-horizontal col-sm-10 posForm" action = "{{route('rotas.store')}}"method = "post">
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
                    <input class="form-control" name="descricao" type="text" required></input>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" >Mapa Rota:</label>
                <div class="col-sm-5">
                    <input class="form-control" name="img1" type="file" required></input>

                    <input class="form-control" name="img2" type="file" required></input>
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
</div>
@endsection