<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students=collect(
            [

            [
                'name' => 'John1 Doe',
                'email' => 'acv11@gmail.com'],
                [
                'name' => 'hhi1hhi Ddickoe',
                'email' => 'acdsm111@gmail.com'],
                  [
                'name' => 'gold1 fdickoe',
                'email' => 'fdkf1f@gmail.com'],
     ]
    );
$students->each( function ($student){
    student::create($student);
});
        // student::create([
        //     'name' => 'John Doe',
        //     'email' => 'abc@gmail.com'
        // ]);
    }
}
