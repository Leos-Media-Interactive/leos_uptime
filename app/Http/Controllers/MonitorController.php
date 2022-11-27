<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\UptimeMonitor\Models\Monitor;

class MonitorController extends Controller
{
    public function index(){
        //$monitors = Monitor::all();
        return view('monitors.index');
    }
}
