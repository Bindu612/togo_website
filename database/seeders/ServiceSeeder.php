<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
               
            
            [
                'id'=>'1',
                'name'=>'Online Registration and Admission',   
                'image'=>'content.png',
                'description'=>'lorem5',
                'highlight'=>'excellent',
                'status'=>'inactive'
            ],
            [
                'id'=>'2',
                'name'=>'Student Management System',   
                'image'=>'briefcase.png',
                'description'=>'lorem5',
                'highlight'=>'excellent',
                'status'=>'inactive'
            ],
            [
                'id'=>'3',
                'name'=>'Staff Management System',   
                'image'=>'career.png',
                'description'=>'lorem5',
                'highlight'=>'excellent',
                'status'=>'inactive'
            ],
            [
                'id'=>'4',
                'name'=>'Fee Management System',   
                'image'=>'python.png',
                'description'=>'lorem5',
                'highlight'=>'excellent',
                'status'=>'inactive'
            ],
            [
                'id'=>'5',
                'name'=>'Examination & Result
                Preparation',   
                'image'=>'designer.png',
                'description'=>'lorem5',
                'highlight'=>'excellent',
                'status'=>'inactive'
            ],
            [
                'id'=>'6',
                'name'=>'Communication Management
                System ',   
                'image'=>'speaker.png',
                'description'=>'lorem5',
                'highlight'=>'excellent',
                'status'=>'inactive'
            ]
        ];

            foreach($datas as $class)
            {
                Service::updateOrCreate(['name'=>$class['name']],$class);
            }
    }
}
