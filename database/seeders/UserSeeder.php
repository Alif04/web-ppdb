<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Student;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        User::create([
            'user_id' => '0000',
            'email' => 'alipganteng@gmail.com',
            'password'=> bcrypt('ngopidulu'),
            'role' => 'admin'
        ]);

        Student::create([
            'nisn' => '00000000',
            'student_id' => '0000',
            'jk' => 'perempuan',
            'name' => 'admin',
            'asalSekolah' => 'lainnya',
            'email' => 'admin@gmail.com',
            'noHp' => '0000',
            'noAyah' => '0000',
            'noIbu' => '0000',
        ]);
        

     }
}
