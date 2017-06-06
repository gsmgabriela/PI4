<?php

namespace App\Http\Controllers;

use App\Rota;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Predio;
use App\Ponto_de_encontro;
use App\Locais;

class rotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rotas= DB::select('select * from rotas');

        return view ('rotas.index',
            ['rotas' => $rotas]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $locais = Locais::all();

        return view('rotas.nova',['todLoc'=>$locais]);
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
        $locais = Locais::all();

        $rota = new Rota();

        $rota->nome = Input::get('nome');
        $rota->descricao = Input::get('descricao');
        $rota->img1 = Input::get('img1');
        $rota->img2 = Input::get('img2');
        $rota->locais_id = Input::get('local');

        if ($rota-> save()){
            echo '<script>alert("Rota Cadastrada com Sucesso");</script>';

            return view('rotas.nova', ['todLoc' => $locais ]);


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
        //
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
        $locais = Locais::all();

        $rota = Rota::find($id);
        return view('rotas.editar',
            ['rota' => $rota], ['todLoc'=>$locais]);
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
        $rota = Rota::find($id);

        $rota -> nome = input::get('nome');
        $rota -> descricao = input::get('descricao');
        $rota -> locais_id = input::get('local');
        $rota -> img1 = input::get('img1');
        $rota -> img2 = input::get('img2');


        if($rota->save()) {

            echo '<script>alert("Dados Atualizados com Sucesso!");</script>';

            return redirect(route('rotas.index'));
        }
        else {
            echo '<script>alert("Erro na atualização!");</script>';

            return redirect(route('rotas.index'));
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
