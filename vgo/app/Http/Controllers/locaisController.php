<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Predio;
use App\Locais;

class locaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $predios = Predio::all();

        $locais= DB::select('select * from locais');

        return view ('locais.index',
            ['locais' => $locais], ['todPred' => $predios ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $predios = Predio::all();

        return view('locais.novo',['todPred'=>$predios]);
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
        $predios = Predio::all();

        $local = new Locais();

        $local->nome = Input::get('nome');
        $local->andar = Input::get('andar');
        $local->predio_id = Input::get('predio');

        if ($local-> save()){
            echo '<script>alert(Locais");</script>';

            return view('locais.index', ['todPred' => $predios ]);


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
        $predios = Predio::all();

        $local = Locais::find($id);
        return view('locais.editar',['local' => $local], ['todPred' => $predios]);

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
        $local = Locais::find($id);

        $local -> nome = input::get('nome');
        $local -> andar = input::get('andar');
        $local -> predio_id = input::get('predio');


        if($local->save()) {

            echo '<script>alert("Dados Atualizados com Sucesso!");</script>';

            return redirect(route('locais.index'));
        }
        else {
            echo '<script>alert("Erro na atualização!");</script>';

            return redirect(route('locais.index'));
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
