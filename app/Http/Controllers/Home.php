<?php

namespace App\Http\Controllers;

use App\Models\Residence;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $residences=Residence::all();
        return view('index',compact('residences'));
    }
}
