<?php

namespace Paulido\Ui\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
// use Paulido\Ui\Classes\Buttons\Danger;
use Paulido\Ui\View\Components\Btn;
use Paulido\Ui\View\Components\BtnLink;
use Paulido\Ui\View\Components\Card; 
use Paulido\Ui\View\Components\Footer; 
use Paulido\Ui\View\Components\Accordion; 
use Paulido\Ui\View\Components\Center;
use Paulido\Ui\View\Components\Select;
use Paulido\Ui\View\Components\Select2;
use Paulido\Ui\View\Components\Alert;
use Paulido\Ui\View\Components\BtnIcon;
use Paulido\Ui\View\Components\Dropdown;
use Paulido\Ui\View\Components\DropdownItem;
use Paulido\Ui\View\Components\DropdownLink;
use Paulido\Ui\View\Components\Input;
use Paulido\Ui\View\Components\Input2;
use Paulido\Ui\View\Components\Nav;
use Paulido\Ui\View\Components\Navitem;
use Paulido\Ui\View\Components\Navicon;
use Paulido\Ui\View\Components\Navbar;
use Paulido\Ui\View\Components\SideBar;
use Paulido\Ui\View\Components\Menu;
use Paulido\Ui\View\Components\MenuItem;
use Paulido\Ui\View\Components\Table;
use Paulido\Ui\View\Components\ModalTop;
use Paulido\Ui\View\Components\ModalLogin;
use Paulido\Ui\Console\InstallComponent;
use Paulido\Ui\Console\InstallComponent2;
use Paulido\Ui\View\Components\Accordions;
use Paulido\Ui\View\Components\AlertDismiss;

class UiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/routes.php');
        // Blade::componentNamespace('Paulido\\Views\\Components', 'ui');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'ui');
        $this->loadViewsFrom(__DIR__.'/../../resources/views/components/buttons', 'ui');
        // $this->loadViewComponentsAs('ui', [
        //     Danger2::class,
        //     Card::class,
        //     Input::class,
        //     Nav::class,
        //     Navbar::class,
        //     Sidebar::class,
        //     Success::class,
        //     Dismiss::class,
        //     SubMenu::class,
        //     SubMenuItem::class,
        //     Dropdown::class,
        //     DropdownItem::class,
        //     DropdownLink::class,
        //     Table::class,
        //     Top::class,
        // ]);
        Blade::component('btn', Btn::class);
        Blade::component('input', Input::class);
        Blade::component('input2', Input2::class);
        Blade::component('card', Card::class);
        Blade::component('footer', Footer::class);
        Blade::component('accordions', Accordions::class);
        Blade::component('accordion', Accordion::class);
        Blade::component('select', Select::class);
        Blade::component('select2', Select2::class);
        Blade::component('center', Center::class);
        Blade::component('btn-icon', BtnIcon::class);
        Blade::component('btn-link', BtnLink::class);
        Blade::component('alert-dimsiss', AlertDismiss::class);
        Blade::component('dropdown', Dropdown::class);
        Blade::component('menu', Menu::class);
        Blade::component('menu-item', MenuItem::class);
        Blade::component('dropdown-item', DropdownItem::class);
        Blade::component('dropdown-link', DropdownLink::class);
        Blade::component('nav', Nav::class);
        Blade::component('navitem', Navitem::class);
        Blade::component('navicon', Navicon::class);
        Blade::component('navbar', Navbar::class);
        Blade::component('sidebar', SideBar::class);
        Blade::component('table', Table::class);
        Blade::component('modal-top', ModalTop::class);
        Blade::component('modal-login', ModalLogin::class);

        // include __DIR__.'/routes.php';
        // Blade::component('picon', Icon::class);

        $this->publishes([
            __DIR__.'/../../resources/assets/css' => public_path('css'),
        ], 'css');

        $this->publishes([
            __DIR__.'/../../resources/assets/js' => public_path('js'),
        ], 'js');

        $this->publishes([
            __DIR__.'/../../resources/views/components/layouts' => resource_path('views/components'),
        ], 'layouts');
        
        $this->publishes([
            __DIR__.'/../../resources/views/components/layouts' => resource_path('views/components'),
        ], 'layouts');

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallComponent::class,
                InstallComponent2::class,
            ]);
        }
    }
}
