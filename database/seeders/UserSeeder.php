<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=>'Admin user',
                'username'=>'adminuser',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'status'=>'active',
                'password'=>bcrypt('.Mana63r.')
            ],
            [
                'name'=>'Staff user',
                'username'=>'staffuser',
                'email'=>'staff@gmail.com',
                'role'=>'staff',
                'status'=>'active',
                'password'=>bcrypt('.Mana63r.')
            ],
            [
                'name'=>'Assistant user',
                'username'=>'assistantuser',
                'email'=>'assistant@gmail.com',
                'role'=>'assistant',
                'status'=>'active',
                'password'=>bcrypt('.Mana63r.')
            ]
        ]);
    }
}
