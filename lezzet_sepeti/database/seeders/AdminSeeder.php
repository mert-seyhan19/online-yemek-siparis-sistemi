<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name'=>'Mert Seyhan',
          'email'=>'myadmin@hotmail.com',
          'password'=>bcrypt(102030),
        ]);



    }
}
