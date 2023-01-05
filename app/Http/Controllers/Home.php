<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Donateur;
use App\Models\Needs;
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
    public function storeDonation(Request $request)
    {

        $residence_id = $request->residence_id;
        $item_id = $request->item_id;
        $quantity = $request->quantity;
        $don_date = $request->don_date;
        $don_name = $request->don_name;
        $don_email = $request->don_email;
        $don_phone = $request->don_phone;

        // $donateur_id=Donateur::insertGetId([
        //     'nom'=>$don_name,
        //     'email'=>$don_email,
        //     'adresse'=>$don_phone,

        // ]);
        Donateur::create([
            'nom'=>$don_name,
            'email'=>$don_email,
            'adresse'=>$don_phone,

        ]);

        for($i=0;$i<count($item_id);$i++){
            $datasave=[
                'residence_id'=>$residence_id,
                'item_id'=>$item_id,
                'quantity'=>$quantity,
                'datelivraison'=>$don_date
            ];
            Needs::create($datasave);
        }
        return redirect()->back();
    }
}
