<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            $datas = [
               
                ['id'=>'1',
                'name'=>'Our commitment for best services.',
                'banner_image'=>'slider-thumb1.png',
                'description'=>'MoldTheFuture software is equally helpful in managing educational
                s functional and administrative work.We envision our software
                as a beacon of progress, guiding the way in skill-building and achieving
                superior learning outcomes.',
                'status'=>'active'],

                ['id'=>'2',
                'name'=>'"MoldTheFuture" provides customized Educational
                Software with APP at affordable price.',
                'banner_image'=>'slider-thumb22.png',
                'description'=>'MoldTheFuture is a completely customized educational 
                management software. This is a super efficient software which comes in
                affordable price and can redefine your administrative and learning
                management experiences.',
                'status'=>'active'],

                ['id'=>'3',
                'name'=>'SaaS, Adding value to your vision and nurturing
                your goal.',
                'banner_image'=>'slider-thumb3.png',
                'description'=>'MoldTheFuture (Education management software) is a SaaS, where we are providing complete customized software as per the institutions demand. This software comes with administration management as well as learning management functionality.',
                'status'=>'active']
            ];

                foreach($datas as $class)
                {
                    Banner::updateOrCreate(['name'=>$class['name']],$class);
                }
        
    }
}
