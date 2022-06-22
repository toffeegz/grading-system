<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InitialRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name'=> 'administrator',
                'display_name' => 'Administrator',
                'description' => 'manage most of the modules and also acts as a school registrar. modules includes; students, classes/rooms, subjects, faculty, departments, settings',   
            ], 
            [
                'id' => 2,
                'name'=> 'instructor',
                'display_name' => 'Instructor',
                'description' => 'manage grades of students',   
            ], 
            [
                'id' => 3,
                'name'=> 'student',
                'display_name' => 'Student',
                'description' => 'view list of subjects and their grades',   
            ], 
        ];

        Db::table('roles')->insert($data);

    }
}
