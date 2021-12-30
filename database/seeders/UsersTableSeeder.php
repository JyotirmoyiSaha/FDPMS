<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

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
         
        'name'=>'admin',
        'email'=>'jyotirmoyisaha@gmail.com',
        'password'=>bcrypt('123456789'),
        'mobile'=>'01939580333',
        'role'=>'admin',
        'image'=>'',
        'address'=>''


      ]);
    }
}
