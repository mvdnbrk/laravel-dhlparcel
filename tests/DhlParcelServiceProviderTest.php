<?php

namespace Mvdnbrk\Laravel\Tests;

use Mvdnbrk\DhlParcel\Client;
use Mvdnbrk\Laravel\DhlParcelClientAdapter;
use Mvdnbrk\Laravel\Facades\DhlParcel as DhlParcelFacade;
use PHPUnit\Framework\Attributes\Test;

class DhlParcelServiceProviderTest extends TestCase
{
    #[Test]
    public function it_can_resolve_the_dhl_parcel_client(): void
    {
        $this->assertInstanceOf(Client::class, app('dhlparcel'));
    }

    #[Test]
    public function it_can_resolve_the_dhl_parcel_client_adapter(): void
    {
        $this->assertInstanceOf(DhlParcelClientAdapter::class, app('dhlparcel.adapter'));
    }

    #[Test]
    public function the_client_is_configured_from_the_config(): void
    {
        $this->assertSame(['userId' => '123456', 'key' => 'DHLPARCEL_SECRET_TOKEN'], app(Client::class)->credentials());
    }

    #[Test]
    public function it_can_use_the_facade(): void
    {
        $this->assertNull(DhlParcelFacade::getAccountId());
    }
}
