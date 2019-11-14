<?php

namespace Mvdnbrk\Laravel\Tests;

use Mvdnbrk\DhlParcel\Client;
use Mvdnbrk\Laravel\DhlParcelClientAdapter;

class DhlParcelServiceProviderTest extends TestCase
{
    /** @test */
    public function it_can_resolve_the_dhl_parcel_client()
    {
        $this->assertInstanceOf(Client::class, app('dhlparcel'));
    }

    /** @test */
    public function it_can_resolve_the_dhl_parcel_client_adapter()
    {
        $this->assertInstanceOf(DhlParcelClientAdapter::class, app('dhlparcel.adapter'));
    }
}
