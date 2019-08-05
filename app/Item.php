<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $casts = [
        'sale' => 'boolean'
    ];

    public $guarded = [];
}
