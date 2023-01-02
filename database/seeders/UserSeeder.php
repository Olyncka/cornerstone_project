<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            'name'=>'Kubuntu',
            'email'=>'kubuntusampras.sk@gmail.com',
            'password'=>Hash::make("12345678"),
            'role_id'=>'1',
            'status'=>1,
            'created_at'=>now(),
        ]);
    }
}