<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('dashboard.composers.admin_header', 'App\Http\ViewComposers\AdminHeaderComposer');
        View::composer(['dashboard.composers.packages', 'includes.pricing'], 'App\Http\ViewComposers\PackagesViewComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}