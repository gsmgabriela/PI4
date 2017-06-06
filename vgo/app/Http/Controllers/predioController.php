<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Predio;
use App\Ponto_de_encontro;

class predioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $predios= DB::select('select * from predios');

        return view ('predio.index',
            ['predios' => $predios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pontos = Ponto_de_encontro::all();

        return view('predio.novo',['todPont'=>$pontos]);
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
        $pontos = Ponto_de_encontro::all();

        $predio = new Predio();

        $predio->nome = Input::get('nome');
        $predio->descricao = Input::get('descricao');
        $predio->ponto_de_encontro_id = Input::get('ponto');

        if ($predio-> save()){
            echo '<script>alert("Prédio Cadastrado com Sucesso");</script>';

            return view('predio.novo', ['todPont' => $pontos ]);


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
        $pontos = Ponto_de_encontro::all();

        $predio = Predio::where('id', $id)->get();
        return view('predio.editar',
            ['predio' => $predio], ['todPont'=>$pontos]);

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
