<?php

// namespace Database\Seeders;

// use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Seeder;
// use App\Models\User;
// use Illuminate\Support\Str;


// class UsersTableSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         User::create([
//             'id' => '1',
//             'email'    => 'test@gmail.com',
//             // 'password'   =>  Hash::make('password'),
//             'password'   =>  '123',
//             'name'    => 'test',
//             'role' => 'doctor',
//             'course_id' => ' ',
//             'form_id' => ' ',
//             'image' => ' ',
//             'semester' => ' '

//         ]);
//     }

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => '1',
            'email'    => 'test@gmail.com',
            // 'password'   =>  Hash::make('password'),
            'password'   =>  '123',
            'name'    => 'test',
            'role' => 'doctor',
            'course_id' => ' ',
            'form_id' => ' ',
            'image' => ' ',
            'semester' => ' ',

        ]);
    }
}
