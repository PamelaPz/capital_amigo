<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ([
        'h2',
        'h5',
        'address',
        'phone',
        'email',
    ]);
}
