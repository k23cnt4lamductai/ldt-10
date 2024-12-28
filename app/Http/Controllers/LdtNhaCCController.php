<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LdtNhaCCController extends Controller
{
    public function list()
    {
        $ldtNhaCCs = LdtNhaCC::all();
        return view('LdtNhaCCs.List',['ldtNhaCCs'=>$ldtNhaCCs]);
    }
}    