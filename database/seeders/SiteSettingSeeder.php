<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            ['address'=>'Kalika Nagar , Mango, Jamshedpur, Jharkhand 831012',
            'phone1'=>'+91 898 7660 188 ',
            'phone2'=>'+91 91424 86865',
            'email1'=>'info@Moldthefuture.com',
            'email2'=>'contact@Moldthefuture.com',
            'facebook_link'=>'https://www.facebook.com/login/',
            'instagram_link'=>'https://www.instagram.com/accounts/login/',
            'whatsapp_no'=>'9113113345',
            'youtube_link'=>'https://www.youtube.com/hashtag/youtubelink',
            'twitter_link'=>'https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D',
            'linkedin_link'=>'https://in.linkedin.com/',
            'status'=>'active'],
            ];

            foreach($datas as $class)
            {
              SiteSetting::updateOrCreate(['address'=>$class['address']],$class);
            }
    }
}
