<?php

namespace App\Providers;

use App\Services\UploadImageService;
use Illuminate\Support\ServiceProvider;

class UploadImageProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UploadImageService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
