<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
//use Illuminate\Support\Facades\Hash;
use Hash;

use DB;

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
            'name'    => 'Mohit',
            'email'    => 'admin@gmail.com',
            'password' =>  Hash::make('123456')
            
        ]);
    }
}
