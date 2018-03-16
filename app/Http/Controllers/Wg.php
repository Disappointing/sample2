<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CjWg;

class Wg extends Controller
{
    //
    public function show()
    {
        $Cjs=CjWg::all();
        return view('wg.show',compact('Cjs'));
    }
}
