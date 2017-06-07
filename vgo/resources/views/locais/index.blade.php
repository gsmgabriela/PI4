@extends('layouts.principal')

@section('pagina', 'Locais')

@section('novo', route('locais.create'))

@section('conteudo')


    <table class="table table-hover posTable">
            <thead>

            <th>ID</th>
            <th>Nome</th>
            <th>Andar</th>
            <th>Prédio</th>
            <th><center>Editar</center></th>
            <th><center>Excluir</center></th>


            </thead>
            @forelse($locais as $linha)
                <tr>


                    <td>{{ $linha->id }} </td>
                    <td>{{ $linha->nome }} </td>
                    <td>{{ $linha->andar }} </td>

                    @forelse($todPred as $predio)
                        @if($predio -> id ==$linha->predio_id)
                            <td>{{$predio-> nome}}</td>
                        @endif
                    @empty
                    @endforelse
                    <td>
                        <center>
                        <form class="form-horizontal" action = "{{route('locais.edit',['id' => $linha->id ])}}">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                            <input type = "hidden" name = "_method" value = "PATCH">
                            <div class="col-sm-offset-3 col-sm-2">
                                <button type="submit" class="btn btn-primary btn-md edit">\</button>
                            </div>
                        </form>
                        </center>
                    </td>

                    <td>
                        <center>
                        <form class="form-horizontal" action = "" method = "post">
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
                    <td colspan="2"> Nenhum Prédio Cadastrado. </td>
                </tr>

            @endforelse
        </table>

        @endsection



