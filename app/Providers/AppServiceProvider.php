<?php

namespace App\Providers;

use App\Api\Contracts\ICommentService;
use App\Api\Repositories\CommentRepository;
use App\Api\Repositories\Contracts\ICommentRepository;
use App\Api\Services\CommentService;
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
        $this->app->bind(ICommentRepository::class, CommentRepository::class);
        $this->app->bind(ICommentService::class, CommentService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
