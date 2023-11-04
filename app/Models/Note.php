<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        'note_title',
            'description',
            'start_date',
            'due_date',
            'priority',
            'reporter_id',
            'assignee_id',
        
    ];
}
