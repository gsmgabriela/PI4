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
        $locais = Locais::all();

        $rotas= DB::select('select * from rotas');

        return view ('rotas.index',
            ['rotas' => $rotas], ['todLoc' => $locais]);

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

        $imagem = $request->file('img1');

        $pasta = public_path() . '/imagens';

        $nome_imagem = 'rota' . time() . '.' . $imagem->getClientOriginalExtension();

        // Move arquivo para pasta
        $nova_imagem = $imagem->move($pasta, $nome_imagem);
        $sub_var = substr($nova_imagem,34);
//        return response()-> json($sub_var);

        $rota = new Rota();
        $rota->nome = Input::get('nome');
        $rota->descricao = Input::get('descricao');
        $rota->locais_id = Input::get('local');
        $rota->img1 = $sub_var;

        if ($rota->save()) {
            echo '<script>alert("Rota Cadastrada com Sucesso");</script>';


            $locais = Locais::all();
            $rotas = Rota::all();

                       return view ('rotas.index',
                ['rotas' => $rotas], ['todLoc' => $locais]);

        } else {
            echo '<script>alert("Erro ao Salvar!"); </script>';
        }





        //
//        $locais = Locais::all();
//
//        $rota = new Rota();
//
//        $rota->nome = Input::get('nome');
//        $rota->descricao = Input::get('descricao');
//        $rota->img1 = Input::get('img1');
//        $rota->img2 = Input::get('img2');
//        $rota->locais_id = Input::get('local');
//
//        if ($rota-> save()){
//            echo '<script>alert("Rota Cadastrada com Sucesso");</script>';
//
//            return view('rotas.nova', ['todLoc' => $locais ]);
//
//
//        }else{
//            echo '<script>alert("Erro ao Salvar!"); </script>';
//        }
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
    public function edit($id, Request $request)
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

        $imagem = $request->file('img1');

        $pasta = public_path() . '/imagens';

        $nome_imagem = 'rota' . time() . '.' . $imagem->getClientOriginalExtension();

        $nova_imagem = $imagem->move($pasta, $nome_imagem);
        $sub_var = substr($nova_imagem,34);
//        return response()-> json($sub_var);


        $rota = Rota::find($id);

        $rota -> nome = input::get('nome');
        $rota -> descricao = input::get('descricao');
        $rota -> locais_id = input::get('local');
        $rota->img1 = $sub_var;


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
