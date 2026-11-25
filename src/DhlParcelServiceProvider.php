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
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/dhlparcel.php', 'dhlparcel');

        $this->registerDhlClient();
        $this->registerDhlAdapter();

        $this->registerPublishing();
    }

    /**
     * Register the DHL Parcel Client.
     */
    protected function registerDhlClient(): void
    {
        $this->app->singleton(Client::class, function () {
            return (new Client)->setUserId((string) config('dhlparcel.id'))->setApiKey((string) config('dhlparcel.secret'));
        });

        $this->app->alias(Client::class, 'dhlparcel');
    }

    /**
     * Register the DHL Parcel Client Adapter.
     */
    protected function registerDhlAdapter(): void
    {
        $this->app->singleton(DhlParcelClientAdapter::class, function (ContainerInterface $container) {
            return new DhlParcelClientAdapter($container->get('dhlparcel'));
        });

        $this->app->alias(DhlParcelClientAdapter::class, 'dhlparcel.adapter');
    }

    /**
     * Register the package's publishable resources.
     */
    protected function registerPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/dhlparcel.php' => config_path('dhlparcel.php'),
            ], 'dhlparcel-config');
        }
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [
            Client::class,
            'dhlparcel',
            DhlParcelClientAdapter::class,
            'dhlparcel.adapter',
        ];
    }
}
