<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_date',
        'event_start_time',
        'event_end_time',
        'event_title',
        'event_notes'
    ];
}
