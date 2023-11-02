<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $datas = [
               
           [
            'title'=>'faq1',
        'description'=>'lorem44',
        'status'=>'inactive',
        'section'=>'About',
           ]
        ];

            foreach($datas as $class)
            {
                Faq::updateOrCreate(['title'=>$class['title']],$class);
            }
    }
}
