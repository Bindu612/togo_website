<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactTable extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'description',
        'designation',
        'company',
        'city',
        'country',
        'email',
        'location',
        'phone'
    ];
}
