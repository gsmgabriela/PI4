<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Compartilhando uma variável global
        //$mercadorias = Mercadorias::find();

        //    view() ->share('mercadorias', $mercadorias);

        //Compartilhar view por meio de uma closure

        view()-> composer('layouts.barra-lateral', function ($view){
            $mercadorias=['Celular', 'TV', 'Computador', 'Geladeira'];
            $view -> with('mercadorias', $mercadorias );
               });



    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
