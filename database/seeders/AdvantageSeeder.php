<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Advantage;
class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
               
            ['id'=>'1',
            'name'=>'Secure',
            'image'=>'device.png',
            'description'=>'MoldTheFuture software is efficient in handling large set of data and your data is
            equally secure with this software.',
            'status'=>'active'],

            ['id'=>'2',
            'name'=>'Faster',
            'image'=>'educator.png',
            'description'=>'MoldTheFuture is a software designed and developed to ease the process of learning. MoldTheFuture software provides seamless experience in managing the activities of educational institutes.',
            'status'=>'active'],

            ['id'=>'3',
            'name'=>'Reliable',
            'image'=>'3(1).png',
            'description'=>'MoldTheFuture software is reliable in terms of usage. Multiple features used in
            this software will guarantee better and efficient management of your educational.',
            'status'=>'active'],

            ['id'=>'4',
            'name'=>'Affordable',
            'image'=>'Geometry.png',
            'description'=>'MoldTheFuture software (SaaS) is completely customized as per the user. All these features will eye to solve the complexity of education management at an affordable price.',
            'status'=>'active']
            
        ];

            foreach($datas as $class)
            {
                Advantage::updateOrCreate(['name'=>$class['name']],$class);
            }
    
    }
}
