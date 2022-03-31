<?php 
namespace ToiLaDev\DocToImage;

use Illuminate\Support\ServiceProvider;

class D2IServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    public function boot()
      
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('D2I', function ($app) {
            return new D2IManager($app);
        });
    }

   public function provides()
   {
       return [
           'D2I'
       ];
   }
}
