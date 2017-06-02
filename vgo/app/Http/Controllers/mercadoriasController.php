<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mercadoria;
use Illuminate\Support\Facades\Input;

class mercadoriasController extends Controller
{

    public function index()
    {
        //return redirect() ->to('clientes.detalhes');//redirecionar para rota nomeada
        //return redirect() -> route('');
        //return redirect() -> to('clientes.index');
        // return redirect() -> back();

        $mercadorias=['Celular', 'TV', 'Computador', 'Geladeira'];

        return view ('mercadorias.index',
            ['mercadorias' => $mercadorias, 'teste' => false, 'outroteste' =>true ]);
    }

    public function nova(){
        return view('mercadorias.novaMercadoria');
    }

    public function create(Request $request)
    {
        $mercadoria = new Mercadoria();

        $mercadoria->codigobarras = Input::get('barras');
        $mercadoria->notafiscal = Input::get('notafiscal');
        $mercadoria->destino = Input::get('destino');
        $mercadoria->cliente_id = Input::get('cliente');
        $mercadoria->veiculo_id = Input::get('veiculo');

        if ($mercadoria-> save()){
            echo '<script>alert("Mercadoria Salva com Sucesso!");</script>';
            return view('mercadorias.novaMercadoria');

        }else{
            echo '<script>alert("Erro ao Salvar!"); </script>';
        }


    }


    public function store(Request $request)
    {
        //
        //return redirect('https://ucl.com.br');

        return redirect()->route('mercadorias.show', ['mercadoria', $algumId]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*
            return view('mercadorias.detalhes', [
            'id' => $id
        ]);*/


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return "Mercadoria Destroy!";
    }

    public function json()
    {
    $mercadorias = [
      [
        'nome' => 'mer1',
        'tipo' => 'celular'
          ],
        [
            'nome' => 'mer2',
            'tipo' => 'computador'
        ]
        ];
    return response() -> json($mercadorias);
    }

}