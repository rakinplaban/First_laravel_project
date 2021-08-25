<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stockmarket extends Model
{
    //
    use HasFactory;

    protected $table = 'stockmarkets';
    public $timestamps = true;

    protected $casts = [
        'high' = 'float'
        'low' = 'float'
        'open' = 'float'
        'close' = 'float'
        'volume' = 'integer'
    ];

    protected $fillable = [
        'date',
        'trade_code',
        'low',
        'high',
        'open',
        'close',
        'volume',
    ];

}
