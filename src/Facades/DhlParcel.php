<?php

namespace Mvdnbrk\Laravel\Facades;

use Illuminate\Support\Facades\Facade;
use Mvdnbrk\DhlParcel\Endpoints\Capabilities;
use Mvdnbrk\DhlParcel\Endpoints\Labels;
use Mvdnbrk\DhlParcel\Endpoints\ServicePoints;
use Mvdnbrk\DhlParcel\Endpoints\Shipments;
use Mvdnbrk\DhlParcel\Endpoints\TrackTrace;
use Mvdnbrk\Laravel\DhlParcelClientAdapter;

/**
 * @method static string|null getAccountId()
 * @method static DhlParcelClientAdapter setAccountId(string $value)
 * @method static DhlParcelClientAdapter setApiKey(string $value)
 * @method static DhlParcelClientAdapter setUserId(string $value)
 * @method static Capabilities capabilities()
 * @method static Labels labels()
 * @method static Shipments shipments()
 * @method static ServicePoints servicePoints()
 * @method static TrackTrace tracktrace()
 *
 * @see DhlParcelClientAdapter
 */
class DhlParcel extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'dhlparcel.adapter';
    }
}
