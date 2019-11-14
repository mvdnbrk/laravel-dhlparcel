<?php

namespace Mvdnbrk\Laravel\Tests;

use Mvdnbrk\DhlParcel\Client;
use Mvdnbrk\Laravel\DhlParcelClientAdapter;

class DhlParcelClientAdapterTest extends TestCase
{
    /**
     * @var \Mvdnbrk\DhlParcel\Client
     */
    protected $client;

    /**
     * @var \Mvdnbrk\Laravel\DhlParcelClientAdapter
     */
    protected $adapter;

    protected function setUp(): void
    {
        $this->client = new Client;
        $this->adapter = new DhlParcelClientAdapter($this->client);
    }

    /** @test */
    public function it_adapts_the_endpoints()
    {
        $endpoints = [
            'labels',
            'shipments',
            'tracktrace',
            'servicePoints',
        ];

        foreach ($endpoints as $endpoint) {
            $this->assertAdaptedEndpoint($this->client, $this->adapter, $endpoint);
        }
    }

    /** @test */
    public function it_can_get_the_account_id()
    {
        $this->assertNull($this->adapter->getAccountId());
    }

    /** @test */
    public function it_can_set_the_account_id()
    {
        $this->assertInstanceOf(DhlParcelClientAdapter::class, $this->adapter->setAccountId('1234'));
    }

    /** @test */
    public function it_can_set_the_api_key()
    {
        $this->assertInstanceOf(DhlParcelClientAdapter::class, $this->adapter->setApiKey('1234'));
    }

    /** @test */
    public function it_can_set_the_user_id()
    {
        $this->assertInstanceOf(DhlParcelClientAdapter::class, $this->adapter->setUserId('1234'));
    }

    /**
     * Assert that the adapter endpoint method returns the same as the client attribute.
     * For example: $adapter->shipments() should be equal to $client->shipments.
     *
     * @param  \Mvdnbrk\DhlParcel\Client  $client
     * @param  \Mvdnbrk\Laravel\DhlParcelClientAdapter  $adapter
     * @param  string $endpoint
     * @return void
     *
     * @throws \PHPUnit\Framework\ExceptionWrapper
     */
    protected function assertAdaptedEndpoint($client, $adapter, $endpoint)
    {
        $this->assertEquals($client->$endpoint, $adapter->$endpoint());
    }
}
