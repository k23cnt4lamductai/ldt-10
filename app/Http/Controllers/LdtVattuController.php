<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LdtVattuController extends Controller
{
    public function list()
    {
        $ldtVattus = LdtVattu::paginate(10);
        return view('LdtVattus.List',['ldtVattus'=>$ldtVattus]);
    }
}