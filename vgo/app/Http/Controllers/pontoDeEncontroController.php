<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Ponto_de_encontro;

class pontoDeEncontroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        return view ('ponto.index');
        //Retorna array de objetos
        $pontos = DB::select('select * from ponto_de_encontros');

        return view ('ponto.index',
            ['pontos' => $pontos]);

        //return response() -> json($clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
        return view ('ponto.novo');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $ponto = new Ponto_de_encontro();

        $ponto->nome = Input::get('nome');
        $ponto->descricao = Input::get('descricao');

        if ($ponto-> save()){
            echo '<script>alert("Ponto de Encontro Salvo com Sucesso!");</script>';

            return view('ponto.novo');


        }else{
            echo '<script>alert("Erro ao Salvar!"); </script>';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Mostrar detalhes de um registro
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $res = Ponto_de_encontro::find($id);
        return view('ponto.editar', ['dados' => $res]);
        //return $res -> descricao;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $ponto = Ponto_de_encontro::find($id);

        $ponto -> nome = input::get('nome');
        $ponto -> descricao = input::get('descricao');


       if($ponto->save()) {

           echo '<script>alert("Dados Atualizados com Sucesso!");</script>';

           return redirect(route('ponto.index'));
       }
else {
    echo '<script>alert("Erro na atualização!");</script>';

    return redirect(route('ponto.index'));
}

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
