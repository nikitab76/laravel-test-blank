<?php

namespace App\Http\Controllers;

class NullObject
{
    public function index(){
        $object = null;
        return $object->name;
    }
}
