<?php

namespace Mvdnbrk\Laravel;

use Mvdnbrk\DhlParcel\Client;

class DhlParcelClientAdapter
{
    /**
     * @var \Mvdnbrk\DhlParcel\Client
     */
    protected $client;

    /**
     * Construct a new api wrapper instance.
     *
     * @param  \Mvdnbrk\DhlParcel\Client  $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->client->getAccountId();
    }

    /**
     * @param  string  $value
     * @return \Mvdnbrk\Laravel\DhlParcelClientAdapter
     */
    public function setAccountId(string $value)
    {
        $this->client->setAccountId($value);

        return $this;
    }

    /**
     * @param  string  $value
     * @return \Mvdnbrk\Laravel\DhlParcelClientAdapter
     */
    public function setApiKey(string $value)
    {
        $this->client->setApiKey($value);

        return $this;
    }

    /**
     * @param  string  $value
     * @return \Mvdnbrk\Laravel\DhlParcelClientAdapter
     */
    public function setUserId(string $value)
    {
        $this->client->setUserId($value);

        return $this;
    }

    /**
     * @return \Mvdnbrk\DhlParcel\Endpoints\Labels
     */
    public function labels()
    {
        return $this->client->labels;
    }

    /**
     * @return \Mvdnbrk\DhlParcel\Endpoints\Shipments
     */
    public function shipments()
    {
        return $this->client->shipments;
    }

    /**
     * @return \Mvdnbrk\DhlParcel\Endpoints\ServicePoints
     */
    public function servicePoints()
    {
        return $this->client->servicePoints;
    }

    /**
     * @return \Mvdnbrk\DhlParcel\Endpoints\TrackTrace
     */
    public function tracktrace()
    {
        return $this->client->tracktrace;
    }
}
