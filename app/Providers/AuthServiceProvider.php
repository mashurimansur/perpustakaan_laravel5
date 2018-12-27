<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerRole();

        //
    }

    public function registerRole(){
        Gate::define('admin', function($user){
            return $user->hasAccess(['admin']);
        });

        Gate::define('transaksi', function($user){
            return $user->hasAccess(['transaksi']);
        });

        Gate::define('setting', function($user){
            return $user->hasAccess(['setting']);
        });

        // Gate::define('admin', function($user){
        //     if ($user->id_role == 1) {
        //         return true;
        //     } else {
        //         return abort(404);
        //     }
        // });

        // Gate::define('user', function($user){
        //     if ($user->id_role == 3) {
        //         return true;
        //     } else {
        //         return abort(404);
        //     };
        // });
    }
}
