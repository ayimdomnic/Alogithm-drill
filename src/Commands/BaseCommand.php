<?php

namespace Ayim\Generator\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class BaseCommand extends command
{
    public $commandData;
    
    public $composer;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->composer = app()['composer'];
    }
    
    public function handle()
    {
        $this->commandData->modelName = $this->argument('model');
        
        $this->commandData->initCommandData();
        $this->commandData->getInputFields();
    }
    
    public function generateCommonItems()
    {
        //here goes code for the the common files
        //I'm still not sure how I'll handle Api
        //this is going to be interesting though
    }
    
    public function getArguments()
    {
        return [
            ['model', InputArgument::REQUIRED, 'Singular Model Name'],
        ];
    }
}
