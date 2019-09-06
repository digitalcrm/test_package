<?php

namespace Digital\Calc;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //Register the controller here
        $this->app->make('Digital\Calc\CalculatorController');         
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // add here routes.php 
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        //Register the views here
        $this->loadViewsFrom(__DIR__.'/views','Calc');  

    }
}
