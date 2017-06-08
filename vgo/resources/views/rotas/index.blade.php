@extends('layouts.principal')

@section('pagina', 'Rotas')

@section('novo', route('rotas.create'))

@section('conteudo')


    <table class="table table-hover">
            <thead>

            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Local de Fuga</th>
            <th><center>Editar</center></th>
            <th><center>Excluir</center></th>


            </thead>
        <tbody>
            @forelse($rotas as $linha)
                <tr>


                    <td>{{ $linha->id }} </td>
                    <td>{{ $linha->nome }} </td>
                    <td>{{ $linha->descricao }} </td>

                    @forelse($todLoc as $local)
                        @if($local -> id ==$linha->locais_id)
                            <td>{{$local-> nome}}</td>
                        @endif
                    @empty
                    @endforelse


                    <td>
                        <center>  <form class="form-horizontal" action = "{{route('rotas.edit',['id' => $linha->id ])}}">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                            <input type = "hidden" name = "_method" value = "PATCH">
                            <div class="col-sm-offset-3 col-sm-2">
                                <button type="submit" class="btn btn-primary btn-md edit">\</button>
                            </div>
                        </form>
                        </center>
                    </td>

                    <td>
                       <center> <form class="form-horizontal" action = "" method = "post">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                            <input type = "hidden" name = "_method" value = "DELETE">

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-2">
                                    <button type="submit" class="btn btn-primary btn-md del">X</button>
                                </div>
                            </div>
                        </form>
                       </center>
                    </td>

                </tr>

            @empty
                <tr>
                    <td colspan="2"> Nenhuma Rota Cadastrada. </td>
                </tr>

            @endforelse
        </tbody>
    </table>

@endsection



