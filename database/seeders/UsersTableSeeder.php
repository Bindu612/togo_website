<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::updateOrCreate
        (['email'=>"admin@togoteam.com"],
       

        ['name'=>"admin",
        'email'=>"admin@togoteam.com",
        'password'=> Hash::make('User@123'),
        'image'=>'device.png',
        'location'=>'giridih',
        'phone'=>'7091025881',
        'address'=>'remba'
    
    ]);

    }
}
