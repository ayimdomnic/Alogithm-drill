<?php

namespace Ayim\Generator;
    
use Illuminate\Support\ServiceProvider;


class AyimGeneratorServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
//        determine how the config is published

        $configPath = __DIR__ .'/../config/ayim_generator.php';
        $this->publishes([
            $configPath => config_path('ayim/ayim_generator.php'),
        ]);
    }
    
    
    public function register()
    {
        //register all commands here
        //sudo code
        //this->app->singleton(blah!blah!)
        
        //this->commands([
        //list them here
       // ])
    }
}