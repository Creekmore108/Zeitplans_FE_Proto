<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use Notifiable, HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'first_name', 'last_name', 'email', 'organization', 'phone', 'content', 'reference',  

    ];
}
