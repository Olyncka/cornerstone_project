<?php

namespace App\Http\Livewire\Admin;

use App\Models\Residence;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class ResidenceListComponent extends Component
{
    public function delete($id)
    {
        $residence=Residence::find($id);
            $destination = 'storage/'.$residence->image;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
            $residence->delete();
    }

    public function render()
    {
        $data=[
            "allresidences" =>Residence::all(),
        ];
        return view('livewire.admin.residence-list-component',$data)->layout('layouts.admin.main');
    }
}
