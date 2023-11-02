<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactUs;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
        [
        'id'=>'1',
        'your_name'=>'con1',
        'subject'=>'maths',
        'phone'=>'4567890987',
        'email'=>'bkg@gmail.com',
        'message'=>'excellent'
        ]
    ];

        foreach($datas as $class)
        {
            ContactUs::updateOrCreate(['your_name'=>$class['your_name']],$class);
        }
    }
}
