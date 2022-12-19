<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residence extends Model
{
    use HasFactory;

    public $fillable=[
        'name',
        'slug',
        'image',
        'adresse',
        'description'
    ];
    protected $casts=[];

    public function getImageAttribute($value)
    {
        if($value){
            return asset('storage/'.$value);
        }else{
            return asset('images/user-default.png');
        }
    }
}
