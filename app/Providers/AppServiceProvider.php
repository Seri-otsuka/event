<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Category; // 必要なモデルをインポート

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         \URL::forceScheme('https');
         $this->app['request']->server->set('HTTPS','on');
        Paginator::useBootstrap(); 
       
    }
    
    
}