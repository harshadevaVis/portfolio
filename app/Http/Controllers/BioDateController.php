<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioDateController extends Controller
{
    public function index(){
        return view('aboutMe');
    }
}
