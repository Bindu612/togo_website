<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountSetting extends Model
{
    use HasFactory;
    protected $table = 'account_settings';

    protected $fillable = ['user_id', 'current_password', 'new_password', 'confirm_password'];

}
