<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'address',
        'phone1',
        'phone2',
        'email1',
        'email2',
        'facebook_link',
        'instagram_link',
        'whatsapp_no',
        'youtube_link',
        'twitter_link',
        'linkedin_link',
        'status'
    ];
}
