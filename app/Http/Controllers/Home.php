<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Residence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Home extends Controller
{
    public function index()
    {
        $residences=Residence::all();
        $articles=Article::with("residences")->get();
        return view('index',compact('residences','articles'));
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}
