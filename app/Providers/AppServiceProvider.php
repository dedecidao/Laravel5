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
//        app('view')->composer('layouts.app', function ($view) {
//            $action = app('request')->route()->getAction();
//            $module = strtolower(explode('\\', $action['uses'])[1]);
//
//            $call = class_basename($action['controller']);
//            list($controller, $action) = explode('@', $call);
//            //$controller =  strtolower(str_replace('Controller', '', $controller));
//            $ctrlName = preg_split('/(?=[A-Z])/', str_replace('Controller', '', $controller), -1, PREG_SPLIT_NO_EMPTY);
//            $action = preg_split('/(?=[A-Z])/', $action, -1, PREG_SPLIT_NO_EMPTY);
//            $action = strtolower(implode('-', $action));
//            $controller = strtolower(implode('-', $ctrlName));
//            $view->with(compact('module', 'controller', 'action'));
//        });
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
