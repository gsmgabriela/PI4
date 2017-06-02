<?php
 
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;


class primeiro extends Controller { 
    public function show($parametroA) {
        echo 'O parametro é:';
        echo ($parametroA);
    } }

    