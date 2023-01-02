<?php

namespace App\Http\Controllers;

use App\Models\Residence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Home extends Controller
{
    public function index()
    {
        $residences=Residence::all();
        return view('index',compact('residences'));
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}
