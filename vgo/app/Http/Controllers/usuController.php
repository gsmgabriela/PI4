<?php

namespace App\Http\Controllers;

use App\Tipos_de_usuarios;
use App\Usuario;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class usuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios = DB::select('select * from usuarios');

        $tipos= Tipos_de_usuarios::all();


        return view ('usuarios.index',
            ['usuarios' => $usuarios],['todTipo' => $tipos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tipos = Tipos_de_usuarios::all();

        return view('usuarios.novo', ['todTipo' => $tipos]);
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
//        return "cheguei cheguei chegando bagunçando a zorra toda";

        $usuario = new Usuario();

        $usuario->nome = Input::get('nome');
        $usuario->cpf = Input::get('cpf');
        $usuario->usuario = Input::get('usuario');
        $usuario->senha = Input::get('senha');
        $usuario->tipo_usuario_id = Input::get('tipo');



        if ($usuario-> save()){
            $tipos = Tipos_de_usuarios::all();
            $usuarios = Usuario::all();

            echo '<script>alert("Usuário Cadastrado com Sucesso");</script>';
            return view ('usuarios.index',
                ['usuarios' => $usuarios], ['todTipo' => $tipos]);


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
