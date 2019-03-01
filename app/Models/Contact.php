<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Contact extends Model
{
    //

    protected $fillable = [
        'number'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
