@extends('layouts.principal')
@extends('layouts.opcoesPag')


<div class="divFundo">

    @section('pagina', 'Prédios')
        @section('novo', route('predio.create'))
    @section('opcoes')

        <table class="table table-hover">
            <thead>

            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ponto de Encontro</th>
            <th>Editar</th>
            <th>Excluir</th>


            </thead>
            @forelse($predios as $linha)
                <tr>

                    <td>{{ $linha->id }} </td>
                    <td>{{ $linha->nome }} </td>
                    <td>{{ $linha->descricao }} </td>
                    <td>{{ $linha->ponto_de_encontro_id}} </td>


                    <td>
                        <form class="form-horizontal" action = "{{route('predio.edit',['id' => $linha->id ])}}">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                            <input type = "hidden" name = "_method" value = "PATCH">
                            <div class="col-sm-offset-3 col-sm-2">
                                <button type="submit" class="btn btn-primary btn-md">\</button>
                            </div>
                        </form>
                    </td>

                    <td>
                        <form class="form-horizontal" action = "" method = "post">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                            <input type = "hidden" name = "_method" value = "DELETE">

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-2">
                                    <button type="submit" class="btn btn-primary btn-md">X</button>
                                </div>
                            </div>
                        </form>
                    </td>

                </tr>

            @empty
                <tr>
                    <td colspan="2"> Nenhum Prédio Cadastrado. </td>
                </tr>

            @endforelse
        </table>


</div>

@endsection

