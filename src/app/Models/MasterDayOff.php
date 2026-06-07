<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterDayOff extends Model
{
    /** @use HasFactory<\Database\Factories\MasterDayOffFactory> */
    use HasFactory;

    protected $table = 'master_days_off';
}
