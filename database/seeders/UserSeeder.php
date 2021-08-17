<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        User::create([
            'name'=>'Samuel Mayorga',
            'email'=>'sams134@gmail.com',
            'password'=>bcrypt('ultima'),
            'active' => 1,
            'user_type' => User::USER_DEVELOPER,
            'profile_photo_path' => 'profile-photos/xkAyrtV2wBHKjtEdpbCzT8hTqAGsBCG6EcShVuEA.jpg'
        ]);
        User::create([
            'name'=>'Armando Miranda',
            'email'=>'amiranda@cmeamir.com',
            'password'=>bcrypt('ultima'),
            'active' => 1,
            'user_type' => User::USER_TECHNICIAN,
            'profile_photo_path' => 'profile-photos/_MG_9862.jpg'
        ]);
        User::create([
            'name'=>'Julio de Paz',
            'email'=>'jpaz@cmeamir.com',
            'password'=>bcrypt('ultima'),
            'active' => 1,
            'user_type' => User::USER_TECHNICIAN,
            'profile_photo_path' => 'profile-photos/_MG_9865.jpg'
        ]);
        User::create([
            'name'=>'Daniel Lopez',
            'email'=>'dlopez@cmeamir.com',
            'password'=>bcrypt('ultima'),
            'active' => 1,
            'user_type' => User::USER_TECHNICIAN,
            'profile_photo_path' => 'profile-photos/_MG_9863.jpg'
        ]);
        User::create([
            'name'=>'Walter Reyes',
            'email'=>'wreyes@cmeamir.com',
            'password'=>bcrypt('ultima'),
            'active' => 1,
            'user_type' => User::USER_MANAGER,
            'profile_photo_path' => 'profile-photos/_MG_9857.jpg'
        ]);
        User::factory(6)->create([
            'user_type' => User::USER_TECHNICIAN,
            'password'=>bcrypt('ultima'),
        ]);
    }
}
