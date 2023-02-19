<?php

namespace Tests\Dummies;

use DonCamillo11\Laraconfig\HasConfig;
use Illuminate\Database\Eloquent\Model;

class DummyModelAdminBag extends Model
{
    use HasConfig;

    protected $table = 'users';

    protected function getSettingBags(): string|array {
        return ['admins'];
    }
}