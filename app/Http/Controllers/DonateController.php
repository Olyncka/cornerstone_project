<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function index()
    {
        $data=[
        "itemsDB"=>Article::all()
            
        ];
        return view('layouts.donate',$data);
    }
}
