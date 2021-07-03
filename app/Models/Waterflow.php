<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waterflow extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'device_id', 'volume', 'cost'
    ];
}
