<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
            $this->registerPolicies();

            Gate::define("Administrateur",
                function (User $user) {
                    return $user->hasRole("Administrateur");
                    
                }
            );

           /* Gate::define('edit-settings', function ($user) {
                return $user->isAdmin;
            });*/

            Gate::define("Agent",
                function (User $user) {
                    return $user->hasRole("Agent");
                }
            );
            Gate::define("Supperviseur",
            function (User $user) {
                return $user->hasRole("Supperviseur");
            }
            );
            Gate::after(function (User $user){
                return $user->hasRole("Super Administrateur");
            }
            );
            //
    }

}
