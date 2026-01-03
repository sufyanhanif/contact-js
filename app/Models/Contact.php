<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     use HasFactory;

    // Field yang boleh diisi via form / API
    protected $fillable = [
        'name',
        'email',
        'phone'
    ];
}
