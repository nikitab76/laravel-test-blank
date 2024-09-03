<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

class LogsError
{
    public function index(){
        return Log::error('Log Error');
    }
}
