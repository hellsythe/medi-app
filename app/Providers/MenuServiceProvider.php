<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Sdkconsultoria\Base\Services\MenuService;
use App\Models\Organization;
use App\Models\Clinic;
use App\Models\Consultation;
use App\Models\Patient;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $service_menu = app(MenuService::class);
        $service_menu->addElement(Organization::makeMenu('information-circle'));
        $service_menu->addElement(Clinic::makeMenu('office-building'));
        $service_menu->addElement(Patient::makeMenu('user-group'));
        $service_menu->addElement(Consultation::makeMenu('support'));
    }
}
