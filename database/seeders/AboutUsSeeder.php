<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
               
           
            [
       'about_us'=>'A Learning Management System (LMS) is a software application or web-based
       platform designed
       to facilitate the management, delivery, and tracking of educational content and training
       programs. LMS platforms are widely used in educational institutions, corporate training
       settings, and various other organizations to streamline the learning process',
       'mission'=>'"Moldthefuture is on a dedicated mission to cater to the IT requirements of
       educational institutions, driven by a commitment to propel technology
       advancements in the sector. Our primary objective is to empower educational
       institutes with state-of-the-art, cutting-edge technology solutions that
       elevate the learning experience. With unwavering dedication, we provide the
       tools and innovations necessary to facilitate seamless integration of
       technology in the educational landscape. Our vision revolves around enabling
       institutions to harness the full potential of modern technology, thereby
       optimizing educational processes and fostering an environment where learning
       is enriched and future potentials are unlocked."',
       'vission'=>'Our vision is to revolutionize the educational landscape by providing
       cutting-edge, user-friendly software solutions for both functional and
       administrative purposes. We aspire to be at the forefront of innovation, our
       software will serve as the baton beare in leading the way towards a brighter
       future for education. Our mission is to create software that not only
       streamlines administrative tasks but also enhances the learning experience,
       ultimately empowering the entire educational community.

       <br><br>We envision our software as a beacon of progress, guiding the way in
       skill-building and achieving superior learning outcomes. We are also
       dedicated to shaping the future of education, where every individual can
       unleash their full potential, and learning knows no bounds. Together, we
       will pave the way for a brighter, more inclusive, and knowledge-driven world


       <br><br>By fostering a user-friendly interface, we aim to make our software
       accessible to educators, administrators, and learners of all backgrounds. We
       believe that technology should be an enabler of education, breaking down
       barriers and providing equal opportunities for all.'
            ]
        ];

            foreach($datas as $class)
            {
                AboutUs::updateOrCreate(['mission'=>$class['mission']],$class);
            }
    
    }
}
