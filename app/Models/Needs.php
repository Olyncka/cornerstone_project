<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Needs extends Model
{
    use HasFactory;

    protected $table = 'needs';

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

    protected $fillable = [
        'residence_id',
        'item_id',
        'quantity',
    ];
    public function articles(){
        return $this->belongsTo(Article::class,'item_id','id');
    }
    public function residences(){
        return $this->belongsTo(Residence::class,'residence_id');
    }
    public function donateurs(){
        return $this->belongsTo(Donateur::class,'donateur_id');
    }

}
