<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperFormatteProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        require_once app_path(). '/Helpers/Format/Formatting.php';//
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
