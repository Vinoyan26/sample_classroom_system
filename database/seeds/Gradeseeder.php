<?php

use Illuminate\Database\Seeder;

class Gradeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Grade::create([
            'grade_name'=>'12A'
        ]);

        App\Grade::create([
            'grade_name'=>'12B'
        ]);

        App\Grade::create([
            'grade_name'=>'12C'
        ]);

        App\Grade::create([
            'grade_name'=>'12D'
        ]);
    }
}
