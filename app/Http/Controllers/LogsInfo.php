<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class LogsInfo
{
    public function index()
    {
        return Log::info('Log Info');
    }
}
