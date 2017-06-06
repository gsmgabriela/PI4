<?php
 
namespace App\Http\Controllers;


use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Cliente;


class ClientesController extends Controller
{


    public function index()
    {
        return view('clientes.index');
    }


    public function novo()
    {
        return view('clientes.novoCliente');
    }


    public function salvar(Request $request)
    {
        $cliente = new Cliente();

        $cliente->razao = Input::get('razao');
        $cliente->nome_fantasia = Input::get('fantasia');
        $cliente->cnpj = Input::get('cnpj');
        $cliente->email = Input::get('email');
        $cliente->idade = Input::get('idade');
        $cliente->fundacao = Input::get('fundacao');
        $cliente->ultimacompra = Input::get('ult_compra');
        $cliente->logomarca = Input::get('logomarca');
        $cliente->documentos = Input::get('documentos');
        $cliente->ativo = Input::get('ativo');
        $cliente->obs = Input::get('obs');

        if ($cliente->save()) {
            echo '<script>alert("Cliente Salvo com Sucesso!");</script>';
            return view('clientes.novoCliente');

        } else {
            echo '<script>alert("Erro ao Salvar!"); </script>';
        }
    }

    public function listar()
    {
        //Retorna array de objetos
        $clientes = DB::select('select * from clientes');

        return view('clientes.buscarClientes',
            ['clientes' => $clientes]);

        //return response() -> json($clientes);
    }

    public function buscar($id)
    {
        $cliente = Cliente::where('id', $id)->get();
        return view('clientes.editarCliente',
            ['dados' => $cliente]);
    }

    public function alterar(Request $request)
    {
        DB::table('clientes')->where('id', Input::get('id'))
            ->update(['razao' => Input::get('razao'),
                'nome_fantasia' => Input::get('fantasia'),
                'cnpj' => Input::get('cnpj'),
                'email' => Input::get('email'),
                'idade' => Input::get('idade'),
                'fundacao' => Input::get('fundacao'),
                'ultimacompra' => Input::get('ult_compra'),
                'logomarca' => Input::get('logomarca'),
                'documentos' => Input::get('documentos'),
                'ativo' => Input::get('ativo'),
                'obs' => Input::get('obs')

             ]);


        echo '<script>alert("Dados Atualizados com Sucesso!");</script>';

        return redirect(route('clientes.listar'));
    }

    public function excluir($id)
    {
        $cliente = Cliente:: find($id);
        $cliente->delete();
        echo '<script>alert("Cliente Excluído!");</script>';
        return redirect(route('clientes.listar'));
    }

        /*
            public function detalhes($id)
            {
                $client = ['Matheus', 'Bruno', 'Jamal', 'Dina'];
                $nome = $client[$id];
                return view('clientes.detalhes',
                    ['nome_cliente' => $nome]);
            }*/


}
    