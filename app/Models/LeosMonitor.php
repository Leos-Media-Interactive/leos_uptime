<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\UptimeMonitor\Models\Monitor;

class LeosMonitor extends Monitor
{
    use HasFactory;
    protected $table = 'monitors';
}
