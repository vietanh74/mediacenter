<?php

namespace VietAnh\MediaCenter;

use Illuminate\Support\ServiceProvider;

class MediaCenterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		$this->publishes([
	        // __DIR__.'/views' => base_path('resources/views/libressltd/lbmediacenter'),
	        __DIR__.'/migrations' => base_path('database/migrations'),
	        __DIR__.'/models' => base_path('app/Models'),
	        // __DIR__.'/requests' => base_path('app/Http/Requests/LBMediaCenter'),
	        // __DIR__.'/config' => base_path('config'),
	    ], 'mediacenter');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('VietAnh\MediaCenter\Controllers\MediaController');
    }
}
