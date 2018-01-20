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
        View::composer(['includes.reviews'], 'App\Http\ViewComposers\ReviewComposer');
        View::composer(['dashboard.composers.users'], 'App\Http\ViewComposers\UsersComposer');
        View::composer(['includes.faqs'], 'App\Http\ViewComposers\FaqComposer');
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
