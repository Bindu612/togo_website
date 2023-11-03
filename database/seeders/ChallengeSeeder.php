<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Challenge;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
               
            ['id'=>'1',
            'name'=>'Status: Unknown',
            'image'=>'icon1.png',
            'description'=>'Students progress can be evaluated only if their performance in all areas of growth
            is
            known. A gap in communication between teachers handling various courses, between
            teachers
            and students, or between teachers and parents can lead to an incomplete assessment.
        ',
            'status'=>'active'],
            ['id'=>'2',
            'name'=>'Getting it right',
            'image'=>'icon2.png',
            'description'=>'Maintaining quality standards is an important aspect of any educational .
            Forgetting to check the quality of some critical lab equipment or a chemical
            solution can end up in disaster. Literally.',
            'status'=>'active'],
            ['id'=>'3',
            'name'=>'Back to square one',
            'image'=>'icon3.png',
            'description'=>'On-boarding new employees is always a chore. It can be a new teacher, someone wanting
            to try their hand at a new course, or a change in syllabus. All of this takes a lot
            of time and effort from someone else willing to spend it, in order to achieve.',
            'status'=>'active'],
            ['id'=>'4',
            'name'=>'Waiting for the right person',
            'image'=>'icon4.png',
            'description'=>'We have all been in the situation where we had to spend hours trying to figure out who
            to
            get
            approval from for a particular request. Spending more time searching than actually
            doing
            is
            a clear sign of waste.',
            'status'=>'active']
           
        ];

            foreach($datas as $class)
            {
                Challenge::updateOrCreate(['name'=>$class['name']],$class);
            }
    
    }
}
