<?php

namespace Tests\Dummies;

use DonCamillo11\Laraconfig\HasConfig;
use Illuminate\Database\Eloquent\Model;

class DummyModelWithoutSettings extends Model
{
    protected $table = 'users';
}