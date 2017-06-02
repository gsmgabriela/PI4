<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Veiculo;
class veiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('veiculos.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('veiculos.novoVeiculo');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $veiculo = new Veiculo();

        $veiculo->placa = Input::get('placa');
        $veiculo->modelo = Input::get('modelo');
        $veiculo->marca = Input::get('marca');
        $veiculo->cor = Input::get('cor');
        $veiculo->combustivel = Input::get('combustivel');

        if ($veiculo-> save()){
            echo '<script>alert("Veículo Salvo com Sucesso!");</script>';
            return view('veiculos.index');

        }else{
            echo '<script>alert("Erro ao Salvar!"); </script>';
        }

    }


    public function listar(){


        //Retorna array de objetos
        $veiculos = DB::select('select * from veiculos');

        return view('veiculos.buscarVeiculos',
            ['veiculos' => $veiculos]);

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
        $veiculo = Veiculo::where('id', $id)->get();
        return view('veiculos.editarVeiculo',
            ['dados' => $veiculo]);

//        $veiculo = Veiculo::find($id);
//        // show the edit form and pass the nerd
//        return View::make('veiculos.editarVeiculo') ->with('dados', $veiculo);



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

        $veiculo = Veiculo::find($id);

        $veiculo -> placa = input::get('placa');
        $veiculo -> marca = input::get('marca');
        $veiculo -> modelo = input::get('modelo');
        $veiculo -> cor = input::get('cor');
        $veiculo -> combustivel = input::get('combustivel');

        $veiculo->save();


        echo '<script>alert("Dados Atualizados com Sucesso!");</script>';

        return redirect(route('veiculos.listar'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veiculo = Veiculo:: find($id);

        $veiculo->delete();

//        echo '<script>alert("Veículo Excluído!");</script>';

        return redirect(route('veiculos.listar'));


    }
}
