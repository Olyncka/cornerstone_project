<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Items extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->user_id = Auth::user()->id;
        });
        self::updating(function($model){
            $model->user_id = Auth::user()->id;
        });
    }
    protected $guarded = [];
}
