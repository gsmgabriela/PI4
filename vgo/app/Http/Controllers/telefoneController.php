<?php

namespace App\Http\Controllers;

use App\Telefone;
use App\Usuario;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class telefoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $usuarios = Usuario::all();

        return view('telefones.novo',['todUsu'=>$usuarios]);
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
        $telefone = new Telefone();
        $telefone->tel1 = Input::get('tel1');
        $telefone->tel2 = Input::get('tel2');
        $telefone->usuario_id = Input::get('usuario');


        $usuario = Telefone::find($telefone->usuario_id);

        if ($usuario != null) {

            echo '<script>alert("Já Possui Telefone Cadastrado!");</script>';

            $telefones = Telefone::all();
            $usuarios = Usuario::all();

            return view('layouts.corpoHome',
                ['todTel' => $telefones], ['todUsu' => $usuarios]);

        } else {


            if ($telefone->save()) {
                echo '<script>alert("Telefone Adicionado com Sucesso!");</script>';

                $telefones = Telefone::all();
                $usuarios = Usuario::all();

                return view('layouts.corpoHome',
                    ['todTel' => $telefones], ['todUsu' => $usuarios]);
            } else {
                echo '<script>alert("Erro ao Salvar!"); </script>';
            }
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
