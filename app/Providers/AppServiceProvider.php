<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.master', function ($view) {
            $view->with('archives', \App\Post::archives());
            $comments = \App\Comment::all();
            $tags = \App\Tag::all();
            $users = \App\User::all();
            $view->with(compact('archives', 'tags', 'users', 'comments'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Stripe::class, function () {
            return new Stripe(config('services.stripe.secret'));
        });
    }
}
