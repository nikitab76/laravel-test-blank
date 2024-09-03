<?php

namespace App\Http\Controllers;

class SleepTen
{
    public function index(){
        sleep(10);
        return true;
    }
}
