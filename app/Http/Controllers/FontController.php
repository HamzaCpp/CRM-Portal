<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FontController extends Controller
{
    public function show ()
    {
        return view('frontend\fontawesome');
    }
}
