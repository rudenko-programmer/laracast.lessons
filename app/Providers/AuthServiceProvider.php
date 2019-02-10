<?php

namespace App\Providers;

use App\Policies\ProjectPolicy;
use App\Project;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
//        'App\Model' => 'App\Policies\ModelPolicy',
        Project::class => ProjectPolicy::class,
    ];

	/**
	 * Register any authentication / authorization services.
	 *
	 *
	 * @return void
	 */
    public function boot(Gate $gate)
    {

        $this->registerPolicies();

//        $gate->before(function ($user){
//        	return $user->id == 2;
//        });

        //
    }
}
