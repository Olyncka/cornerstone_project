<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Needs extends Model
{
    use HasFactory;
    protected $fillable = [
        'residence_id',
        'item_id',
        'quantity',
    ];

}
