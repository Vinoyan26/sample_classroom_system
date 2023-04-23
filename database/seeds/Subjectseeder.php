<?php

use Illuminate\Database\Seeder;

class Subjectseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Subject::create([
            'subject_name'=>'Maths'
        ]);

        App\Subject::create([
            'subject_name'=>'Physics'
        ]);

        App\Subject::create([
            'subject_name'=>'Chemistry'
        ]);

        App\Subject::create([
            'subject_name'=>'Biology'
        ]);

        App\Subject::create([
            'subject_name'=>'IT'
        ]);
    }
}
