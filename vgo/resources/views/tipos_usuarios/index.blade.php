@extends('layouts.principal')

@section('pagina', 'Tipos de Usuários')

@section('novo', route('tipo_usuario.create'))

@section('conteudo')


    <table class="table table-hover">
        <thead>

        <th>ID</th>
        <th>Tipo</th>
        <th>Descrição</th>

        <th><center>Editar</center></th>
        <th><center>Excluir</center></th>


        </thead>
        <tbody>
        @forelse($tipos as $linha)
            <tr>


                <td>{{ $linha->id }} </td>
                <td>{{ $linha->tipo }} </td>
                <td>{{ $linha->descricao }} </td>


                <td>
                    <center>  <form class="form-horizontal" action = "{{route('tipo_usuario.edit',['id' => $linha->id ])}}">
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
                <td colspan="2"> Nenhum Usuário Cadastraddo. </td>
            </tr>

        @endforelse
        </tbody>
    </table>

@endsection



