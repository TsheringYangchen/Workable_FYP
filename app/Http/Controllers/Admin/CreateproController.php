<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateproController extends Controller
{
    //
    public function provide()
    {
        return view('/admin.create-provider');
    }
}
