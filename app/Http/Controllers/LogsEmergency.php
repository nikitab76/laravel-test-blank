<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

class LogsEmergency
{
    public function index(){
        return Log::emergency('Log Emergency');
    }
}
