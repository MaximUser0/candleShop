<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'img_main',
        'img_1',
        'img_2',
        'img_3',
        'aroma',
        'universe',
        'volume',
        'price',
        'description',
    ];
}
