<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\File; 

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
// $users=collect(
//     [
//         ['name' => 'yousaf', 'email' => 'fjfhfh@gmail.com'],
//         ['name'=>'ali','email'=>'jdfjfkfkhf@gmail.com'],
//         ['name'=>'sajid','email'=>'dfjkffj@gmail.com']
//     ]
// );
  $jsonData=File::get('database/json/students.json'); 
        $data=collect(json_decode($jsonData, true));
        // student::create([
        //     'name'=>'yousaf sjs',
        //     'email'=>'fndmffh@gmail.com'
        // ]);
        $data->each(function($student){
            student::create([
                'name' => $student['name'],
                'email' => $student['email']
            ]);
        } );

    }
}
