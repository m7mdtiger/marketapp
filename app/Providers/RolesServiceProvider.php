<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RolesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Inside of our view. We can use it like @role('role-name')
        Blade::directive('role', function ($role){
            return "<?php if(auth()->check() && auth()->user()->hasRole({$role})) :";
        });

        Blade::directive('endrole', function ($role){
            return "<?php endif; ?>";
        });
    }
}
