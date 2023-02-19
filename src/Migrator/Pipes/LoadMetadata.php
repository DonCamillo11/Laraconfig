<?php

namespace DonCamillo11\Laraconfig\Migrator\Pipes;

use Closure;
use DonCamillo11\Laraconfig\Eloquent\Metadata;
use DonCamillo11\Laraconfig\Migrator\Data;

/**
 * @internal
 */
class LoadMetadata
{
    /**
     * Handles the Settings migration.
     *
     * @param  \DonCamillo11\Laraconfig\Migrator\Data  $data
     * @param  \Closure  $next
     *
     * @return mixed
     */
    public function handle(Data $data, Closure $next): mixed
    {
        $data->metadata = Metadata::all()->keyBy(static fn(Metadata $metadata): string => $metadata->name);

        return $next($data);
    }
}
