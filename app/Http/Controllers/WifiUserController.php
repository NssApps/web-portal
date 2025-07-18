<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WifiUserController extends Controller
{
    //
    public function show(Request $request)
    {
      
        return view('portal.access-wifi');  
    }
}
