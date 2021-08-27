<?php

namespace Paulido\Ui\Console;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class InstallComponent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:component {component}'; //{name=vendor/package}' (i.e name: <vendor/name> : paulido/package)

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'install a given component ';

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
        $components = [
            'AlertDismiss' => 'alert-dismiss',
            'BtnIcon' => 'btn-icon',
            'BtnLink' => 'btn-link',
            'DropdownItem' => 'dropdown-item',
            'DropdownLink' => 'dropdown-link',
            'MenuItem' => 'menu-item',
            'ModalLogin' => 'modal-login',
            'ModalTop' => 'modal-top',
            'SideBar' => 'side-bar',
        ];
        $component = $this->argument('component');
        $component = ucfirst($component);

        if(array_key_exists($component, $components)){
            $component2 = $components[$component];
        }
        else
        {
          $component2 = lcfirst($component);
        }
        // preg_match('/[A-Z]/',$component2, $matches,PREG_OFFSET_CAPTURE);
        // $file = basename(glob($path)[0]);
        $this->info("Installing {$component}");
        try{
            $lines = file(__DIR__."/../View/Components/{$component}.php");
            if(sizeof($lines) <= 0){
                $this->info("Imposible de trouver le composant {$component}");
                return;
            }        
            $result = '';
            $namespace = 'namespace App\View\Components;';
            $view = "\t\t return view('$component2');\n";
            foreach($lines as $line) {
            if(str_contains($line, 'namespace')) {
                $result .= $namespace."\n";
            }else if(str_contains($line, 'ui::')){
                $result .= $view;
            }
            
            else {
                $result .= $line;
            }   
        }
            file_put_contents(app_path("View/Components/{$component}.php"), $result);
        }
        catch(Exception $e){
            return $this->info('Imposible de trouver le composant spécifié ? ou le composant ne possède pas de classe');
        }

        $files = glob(__DIR__."/../../resources/views/components/*/{$component2}.blade.php");
        $blade = file($files[0]);
        file_put_contents(resource_path("views/components/{$component2}.blade.php"), $blade);
        $this->info( "Component {$component} installed");
    }
}
