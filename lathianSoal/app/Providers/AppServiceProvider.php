<?php

namespace App\Providers;
use App\Models\Article;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        //
        $categories = Article::select('category')->distinct()->take(2)->get();

        View::share('categories', $categories);

        Paginator::useBootstrapFive();
    }
}
