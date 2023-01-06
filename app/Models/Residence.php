<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Residence extends Model
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
    public function article(){
        return $this->hasMany(Article::class);
    }
}
