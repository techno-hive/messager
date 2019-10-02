<?php
    // MyVendor\contactform\src\ContactFormServiceProvider.php
    namespace TechnoHive\Sms;
    use Illuminate\Support\ServiceProvider;
    class TechnoHiveSmsServiceProvider extends ServiceProvider {
        public function boot()
        {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadViewsFrom(__DIR__.'/resources/views', 'Sms');
            $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
            $this->publishes([
                __DIR__.'/config/hivesms.php' => config_path('hivesms.php'),
            ]);
        }
        public function register()
        {
        }
    }
    ?>