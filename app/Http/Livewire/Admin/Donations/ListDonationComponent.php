<?php

namespace App\Http\Livewire\Admin\Donations;

use App\Models\Needs;
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
    public function cancel($id)
    {
        Needs::findOrFail($id)->delete();
        $this->dispatchBrowserEvent('showerror',['message'=>'Cancelled SuccessFully']);
    }
    public function render()
    {
        $data=[
            "donations"=>Needs::with('residences','articles','donateurs')->get(),
        ];
        return view('livewire.admin.donations.list-donation-component',$data)->layout('layouts.admin.main');;
    }
}
