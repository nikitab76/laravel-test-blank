<?php

namespace App\Http\Controllers;

class SleepNinety
{
    public function index(){
        sleep(90);
        return true;
    }
}
