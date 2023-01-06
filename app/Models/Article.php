<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Article extends Model
{
    use HasFactory ,SoftDeletes;

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

    public function residences(){
        return $this->belongsTo(Residence::class,'residence_id');
    }
}
