<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();  //動画

        //Paginator::useBootstrapFive();    公式ドキュメント
        //またはPaginator::useBootstrapFour();     公式ドキュメント
    }
}
