<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Models\Post;

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
        view()->composer(['layouts.footer'], function ($view) {
            // $data['maintanance'] = \App\Setting::find(1);
            // $data['settings'] = \App\Setting::find(2);
            $data['posts'] = \TCG\Voyager\Models\Post::whereStatus('PUBLISHED')->whereFeatured(1)->orderBy('id','desc')->take(4)->get();
            return $view->with( $data);
        });
    }
}
