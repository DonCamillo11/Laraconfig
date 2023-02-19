<?php

namespace DonCamillo11\Laraconfig\Facades;

use DonCamillo11\Laraconfig\Registrar\SettingRegistrar;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \Illuminate\Support\Collection|\DonCamillo11\Laraconfig\Eloquent\Setting[] getSettings()
 * @method static \DonCamillo11\Laraconfig\Registrar\Declaration name(string $name)
 */
class Setting extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return SettingRegistrar::class;
    }
}
