<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('admin');
        $data = [
            'first_name'=>'John',
            'last_name'=>'deo',
            'gmail'=>'admin@gmail.com',
            'password'=> $password,
            'phone'=>45545484,
            'role'=>'John',
            'otp'=>'John',
            'image'=>'',
            'address'=>'John',
            'age'=>'John',
            'gender'=>'John',
            'description'=>'John'
        ];
        \App\Models\Admin::insert($data);
    }
}
