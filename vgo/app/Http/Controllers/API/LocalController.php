<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Locais;


class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Locais::all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return Locais::find($id);
    }


}
