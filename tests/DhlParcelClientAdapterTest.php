<?php

namespace Mvdnbrk\Laravel\Tests;

use Mvdnbrk\DhlParcel\Client;
use Mvdnbrk\Laravel\DhlParcelClientAdapter;
use PHPUnit\Framework\Attributes\Test;

class DhlParcelClientAdapterTest extends TestCase
{
    protected Client $client;

    protected DhlParcelClientAdapter $adapter;

    protected function setUp(): void
    {
        parent::setUp();

        $this->client = new Client;
        $this->adapter = new DhlParcelClientAdapter($this->client);
    }

    #[Test]
    public function it_adapts_the_endpoints(): void
    {
        $endpoints = [
            'capabilities',
            'labels',
            'shipments',
            'tracktrace',
            'servicePoints',
        ];

        foreach ($endpoints as $endpoint) {
            $this->assertAdaptedEndpoint($this->client, $this->adapter, $endpoint);
        }
    }

    #[Test]
    public function it_can_get_the_account_id(): void
    {
        $this->assertNull($this->adapter->getAccountId());
    }

    #[Test]
    public function it_can_set_the_account_id(): void
    {
        $this->assertInstanceOf(DhlParcelClientAdapter::class, $this->adapter->setAccountId('1234'));
    }

    #[Test]
    public function it_can_set_the_api_key(): void
    {
        $this->assertInstanceOf(DhlParcelClientAdapter::class, $this->adapter->setApiKey('1234'));
    }

    #[Test]
    public function it_can_set_the_user_id(): void
    {
        $this->assertInstanceOf(DhlParcelClientAdapter::class, $this->adapter->setUserId('1234'));
    }

    /**
     * Assert that the adapter endpoint method returns the same as the client attribute.
     * For example: $adapter->shipments() should be equal to $client->shipments.
     */
    protected function assertAdaptedEndpoint(Client $client, DhlParcelClientAdapter $adapter, string $endpoint): void
    {
        $this->assertSame($client->$endpoint, $adapter->$endpoint());
    }
}
