<?php

namespace Paulido\Ui\Console;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class Installcomponent2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'components:list'; //{name=vendor/package}' (i.e name: <vendor/name> : paulido/package)

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'display list of componentss';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $components = [];
        $component = '';
        $files = glob(__DIR__."/../View/Components/*.php");
        foreach($files as $file)
        {
            array_push($components, basename($file));
        }
        
        $components = str_replace('.php', '', $components);
        array_push($components, 'All');
        
        $defaultIndex = 0;
        $component = $this->choice(
            'What component do want to install ?',
            $components,
            $defaultIndex,
            $maxAttempts = null,
            $allowMultipleSelections = false
        );

        if($component == 'All')
        {
            unset($components[count($components)-1]);
            foreach($components as $component){
                $command = "install:component $component";
                $this->info("Installing component $component");
                Artisan::call($command);
                $this->info("Component $component installed");
            }
            $this->info("All component have been installed");
        }
        else
        {

            $command = "install:component $component";
            Artisan::call($command);
            $this->info("component $component installed");
        }
       
        

    }
}
