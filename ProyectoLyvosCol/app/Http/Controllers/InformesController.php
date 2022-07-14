<?php

namespace App\Http\Controllers;

use App\Http\Controllers\InformesController as ControllersInformesController;
use Illuminate\Http\Request;

class InformesController extends Controller
{
    //
    public function index()
    {
        return view('informes.informes');
    }

}
