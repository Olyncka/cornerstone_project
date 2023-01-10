<?php

namespace App\Http\Livewire\Gerant\Donations;

use App\Models\Article;
use App\Models\Needs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ListDonationComponent extends Component
{
    public function approve($id)
    {
        $approve=Needs::findOrFail($id);
        $item=Article::findOrFail($approve->item_id);
        if($item->quantity !=0 && $item->quantity >=$approve->quantity){
            $item->update(['quantity' => $item->quantity - $approve->quantity]);
        }else{
            dd('failed');
            $this->dispatchBrowserEvent('showerror',['message'=>'Stock epuise']);
        }
        $approve->status=1;
        $approve->save();
    }
    public function render()
    {
        $data=[
            "donations"=>Needs::whereIn('needs.residence_id',(function ($query) {
                $query->from('residences')
                ->select('residences.id')
                    ->crossJoin('users')
                    ->where('residences.id','=',DB::raw('users.residence_id'))
                    ->where('users.id','=',Auth::user()->id);
            }))
            ->with('residences','articles','donateurs')
            ->get(),
        ];
        return view('livewire.gerant.donations.list-donation-component',$data)->layout('layouts.gerant.main');
    }
}
