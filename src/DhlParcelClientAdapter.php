<?php

namespace Mvdnbrk\Laravel;

use Mvdnbrk\DhlParcel\Client;
use Mvdnbrk\DhlParcel\Endpoints\Capabilities;
use Mvdnbrk\DhlParcel\Endpoints\Labels;
use Mvdnbrk\DhlParcel\Endpoints\ServicePoints;
use Mvdnbrk\DhlParcel\Endpoints\Shipments;
use Mvdnbrk\DhlParcel\Endpoints\TrackTrace;

class DhlParcelClientAdapter
{
    public function __construct(protected Client $client) {}

    public function getAccountId(): ?string
    {
        return $this->client->getAccountId();
    }

    public function setAccountId(string $value): self
    {
        $this->client->setAccountId($value);

        return $this;
    }

    public function setApiKey(string $value): self
    {
        $this->client->setApiKey($value);

        return $this;
    }

    public function setUserId(string $value): self
    {
        $this->client->setUserId($value);

        return $this;
    }

    public function capabilities(): Capabilities
    {
        return $this->client->capabilities;
    }

    public function labels(): Labels
    {
        return $this->client->labels;
    }

    public function shipments(): Shipments
    {
        return $this->client->shipments;
    }

    public function servicePoints(): ServicePoints
    {
        return $this->client->servicePoints;
    }

    public function tracktrace(): TrackTrace
    {
        return $this->client->tracktrace;
    }
}
