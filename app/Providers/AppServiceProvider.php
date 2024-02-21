<?php

namespace App\Providers;

use App\Models\Lead;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.admin', function ($view) {
            $newLeadsCount = Lead::where('status_id', 1)->count();
            $view->with('newLeadsCount', $newLeadsCount);
        });
    }
}
