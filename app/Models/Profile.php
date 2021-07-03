<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
      'device_id', 'address', 'phone', 'account_number'
    ];

    public function user() {
        return $this->belongsTo('users');
    }
}
