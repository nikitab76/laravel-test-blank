<?php

namespace App\Http\Controllers;

use function PHPUnit\Framework\throwException;

class PhpException
{
    public function index(){
        throw new \Exception('Exception');
    }
}
