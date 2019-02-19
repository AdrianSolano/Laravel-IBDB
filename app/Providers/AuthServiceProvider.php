<?php

namespace App\Providers;

//use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Book' => 'App\Policies\BookPolicy',
    ];


    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    /* $gate->before(function($user){
        if ( $user->id == 2 ) return true;
    }); */
    public function boot(Gate $gate)
    {
        $this->registerPolicies();
        
    
    }
}
