<?php

use Illuminate\Database\Seeder;

class Studentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Student::create([
            //'photo'=>'',
            'firstname'=>'vijayakumar',
            'lastname'=>'vinojan',
            'gender'=>'male',
            'grade_id'=>'3',
            'school'=>'Jaffna Hindu College',
            'phone'=>'0768815267',
            'email'=>'vijayakumarvinojan81@gmail.com',
            'address'=>'jaffna'
        ]);

        App\Student::create([
            //'photo'=>'',
            'firstname'=>'Nagendran',
            'lastname'=>'Anushan',
            'gender'=>'male',
            'grade_id'=>'2',
            'school'=>'Colombo Hindu College',
            'phone'=>'0767789856',
            'email'=>'anushan1@gmail.com',
            'address'=>'Nellaidy'
        ]);

        App\Student::create([
            //'photo'=>'',
            'firstname'=>'Viajay',
            'lastname'=>'Shangetha',
            'gender'=>'female',
            'grade_id'=>'1',
            'school'=>'Jaffna Hindu ladies College',
            'phone'=>'0764456897',
            'email'=>'vijaysangeth81@gmail.com',
            'address'=>'India'
        ]);

        App\Student::create([
           //'photo'=>'',
            'firstname'=>'Josed[h',
            'lastname'=>'Vijay',
            'gender'=>'male',
            'grade_id'=>'1',
            'school'=>'Central College',
            'phone'=>'0764457897',
            'email'=>'joseeeepehsan81@gmail.com',
            'address'=>'India'
        ]);

        App\Student::create([
            //'photo'=>'',
            'firstname'=>'Vino',
            'lastname'=>'Asgi',
            'gender'=>'female',
            'grade_id'=>'1',
            'school'=>'Jaffna College',
            'phone'=>'076789957',
            'email'=>'vinoabsha@gmail.com',
            'address'=>'Kondavil'
        ]);

        App\Student::create([
            //'photo'=>'',
            'firstname'=>'Malar',
            'lastname'=>'Thas',
            'gender'=>'male',
            'grade_id'=>'3',
            'school'=>'Jaffna Hindu College',
            'phone'=>'0768815267',
            'email'=>'vijayakumarbugyg81@gmail.com',
            'address'=>'jaffna'
        ]);

        App\Student::create([
            //'photo'=>'',
            'firstname'=>'Vija',
            'lastname'=>'Thas',
            'gender'=>'male',
            'grade_id'=>'2',
            'school'=>'Colombo Hindu College',
            'phone'=>'0767789856',
            'email'=>'anushdfgfan1@gmail.com',
            'address'=>'Thavady'
        ]);

        App\Student::create([
            //'photo'=>'',
            'firstname'=>'Ajith',
            'lastname'=>'Shaliny',
            'gender'=>'female',
            'grade_id'=>'2',
            'school'=>'Jaffna Hindu ladies College',
            'phone'=>'0764456897',
            'email'=>'vijaysanget;lkdhh81@gmail.com',
            'address'=>'India'
        ]);

        App\Student::create([
           //'photo'=>'',
            'firstname'=>'Erode',
            'lastname'=>'Ramesh',
            'gender'=>'male',
            'grade_id'=>'2',
            'school'=>'Central College',
            'phone'=>'0764457897',
            'email'=>'joseeeepehsdfsan81@gmail.com',
            'address'=>'Kokuvil'
        ]);

        App\Student::create([
            //'photo'=>'',
            'firstname'=>'Vithu',
            'lastname'=>'san',
            'gender'=>'male',
            'grade_id'=>'3',
            'school'=>'Jaffna Hindu College',
            'phone'=>'076789957',
            'email'=>'vinoabshasdf@gmail.com',
            'address'=>'Kondavil'
        ]);
    }
}
