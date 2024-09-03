<?php

namespace App\Http\Controllers;
class UnprocessableEntity
{
    public function index(\App\Http\Requests\UnprocessableEntity $entity){
        return redirect('/');
    }
}
