<?php

namespace Mvdnbrk\Laravel;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Mvdnbrk\DhlParcel\Client;
use Psr\Container\ContainerInterface;

class DhlParcelServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/dhlparcel.php', 'dhlparcel');

        $this->registerDhlClient();
        $this->registerDhlAdapter();

        $this->registerPublishing();
    }

    /**
     * Register the DHL Parcel Client.
     *
     * @return void
     */
    protected function registerDhlClient()
    {
        $this->app->singleton(Client::class, function () {
            return (new Client)->setUserId(config('dhlparcel.id'))->setApiKey(config('dhlparcel.secret'));
        });

        $this->app->alias(Client::class, 'dhlparcel');
    }

    /**
     * Register the DHL Parcel Client Adapter.
     *
     * @return void
     */
    protected function registerDhlAdapter()
    {
        $this->app->singleton(DhlParcelClientAdapter::class, function (ContainerInterface $container) {
            return new DhlParcelClientAdapter($container->get('dhlparcel'));
        });

        $this->app->alias(DhlParcelClientAdapter::class, 'dhlparcel.adapter');
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/dhlparcel.php' => config_path('dhlparcel.php'),
            ], 'dhlparcel-config');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'dhlparcel',
            'dhlparcel.adapter',
        ];
    }
}
