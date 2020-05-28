<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
       Gate::define('update-company', function ($user, $company){
           return $user->id === $company->user_id;
       });

       Gate::define('delete-company', function ($user, $company){
          return $user->id === $company->user_id;
       });
    }
}
