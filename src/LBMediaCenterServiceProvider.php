<?php

namespace LIBRESSLtd\LBMediaCenter;

use Illuminate\Support\ServiceProvider;

class LBMediaCenterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'mc');
		$this->publishes([
	        // __DIR__.'/views' => base_path('resources/views/libressltd/lbmediacenter'),
	        __DIR__.'/migrations' => base_path('database/migrations'),
	        __DIR__.'/models' => base_path('app/Models'),
	        // __DIR__.'/requests' => base_path('app/Http/Requests/LBMediaCenter'),
	        // __DIR__.'/config' => base_path('config'),
	    ], 'lbmediacenter');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('LIBRESSLtd\LBMediaCenter\Controllers\MediaController');
        // $this->app->make('LIBRESSLtd\DeepPermission\Controllers\PermissionGroupController');
        // $this->app->make('LIBRESSLtd\DeepPermission\Controllers\PermissionController');
        // $this->app->make('LIBRESSLtd\DeepPermission\Controllers\UserRoleController');
        // $this->app->make('LIBRESSLtd\DeepPermission\Controllers\RolePermissionController');
        // $this->app->make('LIBRESSLtd\DeepPermission\Controllers\UserPermissionController');
        // $this->app->make('LIBRESSLtd\DeepPermission\Controllers\SettingController');
    }
}
