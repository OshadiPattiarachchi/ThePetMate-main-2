<?php

namespace App\Providers;

use App\Models\PetProfile;
use App\Policies\PetPolicy;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Gate::policy(PetProfile::class, PetPolicy::class);
    }
}
